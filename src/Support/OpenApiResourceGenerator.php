<?php

namespace Buffalo\Api\Support;

use Illuminate\Support\Str;
use RuntimeException;

class OpenApiResourceGenerator
{
    /**
     * @var list<string>
     */
    protected array $httpVerbs = ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD'];

    public function generateFrom(string $from, string $packageRoot): int
    {
        return $this->writeResources($this->groupEndpoints($this->collectEndpoints($from)), $packageRoot);
    }

    /**
     * @param  array<string, mixed>  $spec
     */
    public function generate(array $spec, string $packageRoot): int
    {
        return $this->writeResources($this->groupEndpoints($this->endpointsFromOpenApi($spec)), $packageRoot);
    }

    public function loadSpec(string $from): array
    {
        $contents = filter_var($from, FILTER_VALIDATE_URL)
            ? $this->download($from)
            : $this->readFile($from);

        $spec = json_decode($contents, true);

        if (! is_array($spec) || ! isset($spec['paths']) || ! is_array($spec['paths'])) {
            throw new RuntimeException("OpenAPI document at [{$from}] is missing a paths object.");
        }

        return $spec;
    }

    /**
     * @return list<array{method: string, path: string}>
     */
    public function collectEndpoints(string $from): array
    {
        $from = rtrim($from, '/');
        $endpoints = [];

        if (is_dir($from)) {
            $docs = $from.'/storage/api-docs/api-docs.json';

            if (is_file($docs)) {
                $endpoints = $this->endpointsFromOpenApi($this->loadSpec($docs));
            }

            $routesDir = $from.'/routes';

            if (is_dir($routesDir)) {
                $endpoints = array_merge($endpoints, $this->endpointsFromRouteFiles($routesDir));
            }

            if ($endpoints === []) {
                throw new RuntimeException("No OpenAPI spec or route files found in [{$from}].");
            }

            return $this->uniqueEndpoints($endpoints);
        }

        return $this->uniqueEndpoints($this->endpointsFromOpenApi($this->loadSpec($from)));
    }

    /**
     * @param  array<string, mixed>  $spec
     * @return list<array{method: string, path: string}>
     */
    protected function endpointsFromOpenApi(array $spec): array
    {
        $endpoints = [];

        foreach ($spec['paths'] ?? [] as $path => $operations) {
            if (! is_array($operations)) {
                continue;
            }

            foreach ($operations as $httpMethod => $operation) {
                if (! is_array($operation) || ! in_array(strtoupper((string) $httpMethod), $this->httpVerbs, true)) {
                    continue;
                }

                $endpoints[] = [
                    'method' => strtoupper((string) $httpMethod),
                    'path' => $this->relativePath((string) $path),
                ];
            }
        }

        return $endpoints;
    }

    /**
     * @return list<array{method: string, path: string}>
     */
    protected function endpointsFromRouteFiles(string $routesDir): array
    {
        $endpoints = [];
        $skip = ['web.php', 'channels.php', 'console.php'];

        foreach (glob($routesDir.'/*.php') ?: [] as $file) {
            if (in_array(basename($file), $skip, true)) {
                continue;
            }

            $endpoints = array_merge($endpoints, $this->parseRouteFile((string) file_get_contents($file)));
        }

        return $endpoints;
    }

    /**
     * @return list<array{method: string, path: string}>
     */
    protected function parseRouteFile(string $contents): array
    {
        $endpoints = [];
        $prefixes = [];
        $pendingPrefix = null;
        $depth = 0;

        foreach (preg_split("/\R/", $contents) ?: [] as $line) {
            if (preg_match("/prefix\(\s*['\"]([^'\"]+)['\"]/", $line, $match)) {
                $pendingPrefix = trim($match[1], '/');
            }

            if (preg_match("/Route::(get|post|put|patch|delete|head)\(\s*['\"]([^'\"]*)['\"]/", $line, $match)) {
                $segments = array_values(array_filter([
                    ...array_column($prefixes, 'prefix'),
                    trim($match[2], '/'),
                ], fn (string $segment): bool => $segment !== ''));

                $endpoints[] = [
                    'method' => strtoupper($match[1]),
                    'path' => $this->relativePath(implode('/', $segments)),
                ];
            }

            $opened = substr_count($line, '{');
            $closed = substr_count($line, '}');

            if ($pendingPrefix !== null && $opened > 0) {
                $prefixes[] = [
                    'prefix' => $pendingPrefix,
                    'depth' => $depth + 1,
                ];
                $pendingPrefix = null;
            }

            $depth += $opened - $closed;

            $prefixes = array_values(array_filter(
                $prefixes,
                fn (array $prefix): bool => $prefix['depth'] <= $depth,
            ));
        }

        return $endpoints;
    }

    /**
     * @param  list<array{method: string, path: string}>  $endpoints
     * @return list<array{method: string, path: string}>
     */
    protected function uniqueEndpoints(array $endpoints): array
    {
        $unique = [];

        foreach ($endpoints as $endpoint) {
            $signature = $endpoint['method'].' '.preg_replace('/\{[^}]+\}/', '{}', $endpoint['path']);
            $unique[$signature] ??= $endpoint;
        }

        return array_values($unique);
    }

    /**
     * @param  list<array{method: string, path: string}>  $endpoints
     * @return array<string, array<string, mixed>>
     */
    protected function groupEndpoints(array $endpoints): array
    {
        $grouped = [];

        foreach ($endpoints as $endpoint) {
            $segments = $endpoint['path'] === '' ? [] : explode('/', $endpoint['path']);
            $group = $this->resourceGroup($segments);
            $key = $group['key'];

            $grouped[$key] ??= [
                'key' => $key,
                'class' => $this->className($key),
                'base' => $group['base'],
                'accessor' => $this->methodName($key === 'misc' ? 'misc' : $key),
                'methods' => [],
            ];

            $grouped[$key]['methods'][] = $this->methodDraft($endpoint['method'], $group['rest']);
        }

        ksort($grouped);

        foreach ($grouped as $key => $resource) {
            $grouped[$key]['methods'] = $this->finalizeMethods($resource['methods']);
        }

        return $grouped;
    }

    /**
     * @param  array<string, array<string, mixed>>  $resources
     */
    protected function writeResources(array $resources, string $packageRoot): int
    {
        $resourceDir = $packageRoot.'/src/Resources';

        foreach (glob($resourceDir.'/*.php') ?: [] as $file) {
            if (basename($file) !== 'Resource.php') {
                unlink($file);
            }
        }

        foreach ($resources as $resource) {
            file_put_contents(
                $resourceDir.'/'.$resource['class'].'.php',
                $this->renderResource($resource),
            );
        }

        file_put_contents($packageRoot.'/src/GeneratedResources.php', $this->renderMap($resources));
        file_put_contents($packageRoot.'/src/AccessesResources.php', $this->renderAccessors($resources));

        return count($resources);
    }

    /**
     * @param  array<int, string>  $segments
     * @return array{key: string, base: string, rest: array<int, string>}
     */
    protected function resourceGroup(array $segments): array
    {
        $first = $segments[0] ?? null;

        if ($first === 'admin' && isset($segments[1]) && ! $this->isParam($segments[1])) {
            return [
                'key' => 'admin-'.$segments[1],
                'base' => 'admin/'.$segments[1],
                'rest' => array_values(array_slice($segments, 2)),
            ];
        }

        if (in_array($first, ['v1', 'v2'], true) && isset($segments[1]) && ! $this->isParam($segments[1])) {
            return [
                'key' => $segments[1],
                'base' => $first.'/'.$segments[1],
                'rest' => array_values(array_slice($segments, 2)),
            ];
        }

        if ($first === null || $this->isParam($first) || count($segments) <= 1) {
            return [
                'key' => 'misc',
                'base' => '',
                'rest' => array_values($segments),
            ];
        }

        return [
            'key' => $first,
            'base' => $first,
            'rest' => array_values(array_slice($segments, 1)),
        ];
    }

    /**
     * @param  array<int, string>  $rest
     * @return array<string, mixed>
     */
    protected function methodDraft(string $httpMethod, array $rest): array
    {
        $params = [];
        $named = [];
        $pathParts = [];

        foreach ($rest as $segment) {
            if ($this->isParam($segment)) {
                $param = $this->paramName($segment);
                $params[] = $param;
                $pathParts[] = '{$'.$param.'}';
            } else {
                $named[] = $segment;
                $pathParts[] = $segment;
            }
        }

        return [
            'http' => $httpMethod,
            'params' => $params,
            'named' => $named,
            'path' => implode('/', $pathParts),
            'preferred' => $this->preferredName($httpMethod, $named, $params !== []),
        ];
    }

    /**
     * @param  array<int, array<string, mixed>>  $drafts
     * @return array<int, array<string, mixed>>
     */
    protected function finalizeMethods(array $drafts): array
    {
        $used = [];
        $methods = [];

        foreach ($drafts as $draft) {
            $name = $this->uniqueMethodName($draft['preferred'], $draft['http'], $draft['named'], $used);
            $used[$name] = true;
            $draft['name'] = $name;
            $methods[] = $draft;
        }

        usort($methods, fn (array $a, array $b): int => strcmp($a['name'], $b['name']));

        return $methods;
    }

    /**
     * @param  array<int, string>  $named
     * @param  array<string, true>  $used
     */
    protected function uniqueMethodName(string $preferred, string $httpMethod, array $named, array $used): string
    {
        $name = $preferred;
        $raw = $this->rawName($named) ?: 'index';

        if (isset($used[$name])) {
            $name = $this->withVerbPrefix($httpMethod, $raw);
        }

        $base = $name;
        $suffix = 2;

        while (isset($used[$name])) {
            $name = $base.$suffix;
            $suffix++;
        }

        return $name;
    }

    /**
     * @param  array<int, string>  $named
     */
    protected function preferredName(string $httpMethod, array $named, bool $hasParams): string
    {
        $raw = $this->rawName($named);

        if ($raw === '') {
            return match ($httpMethod) {
                'GET' => $hasParams ? 'getIndex' : 'index',
                'POST' => 'store',
                'PUT', 'PATCH' => 'update',
                'DELETE' => 'destroy',
                default => strtolower($httpMethod),
            };
        }

        return match ($httpMethod) {
            'GET' => $hasParams ? $this->withVerbPrefix('GET', $raw) : $raw,
            'PUT', 'PATCH', 'DELETE' => $this->withVerbPrefix($httpMethod, $raw),
            default => $raw,
        };
    }

    /**
     * @param  array<int, string>  $named
     */
    protected function rawName(array $named): string
    {
        if ($named === []) {
            return '';
        }

        return $this->methodName(implode('-', $named));
    }

    protected function withVerbPrefix(string $httpMethod, string $raw): string
    {
        $verb = match (strtoupper($httpMethod)) {
            'GET' => 'get',
            'POST' => 'post',
            'PUT' => 'put',
            'PATCH' => 'patch',
            'DELETE' => 'delete',
            default => strtolower($httpMethod),
        };

        return $this->methodName($verb.ucfirst($raw));
    }

    /**
     * @param  array<string, mixed>  $resource
     */
    protected function renderResource(array $resource): string
    {
        $methods = '';

        foreach ($resource['methods'] as $method) {
            $methods .= $this->renderMethod($method);
        }

        $base = addslashes((string) $resource['base']);

        return <<<PHP
<?php

namespace Buffalo\\Api\\Resources;

use Buffalo\\Api\\BuffaloResponse;

class {$resource['class']} extends Resource
{
    protected function basePath(): string
    {
        return '{$base}';
    }
{$methods}}

PHP;
    }

    /**
     * @param  array<string, mixed>  $method
     */
    protected function renderMethod(array $method): string
    {
        $isQuery = in_array($method['http'], ['GET', 'HEAD'], true);
        $payload = $isQuery ? 'query' : 'data';
        $http = strtolower($method['http']);
        $path = (string) $method['path'];
        $pathArg = $path === '' ? "''" : $this->pathLiteral($path, $method['params']);

        $signature = [];
        $doc = "    /**\n";

        foreach ($method['params'] as $param) {
            $signature[] = 'string|int $'.$param;
        }

        $doc .= "     * @param  array<string, mixed>  \${$payload}\n";
        $doc .= "     */\n";
        $signature[] = "array \${$payload} = []";

        $args = implode(', ', $signature);

        return <<<PHP

{$doc}    public function {$method['name']}({$args}): BuffaloResponse
    {
        return \$this->{$http}({$pathArg}, \${$payload});
    }

PHP;
    }

    /**
     * @param  array<int, string>  $params
     */
    protected function pathLiteral(string $path, array $params): string
    {
        if ($params === []) {
            return var_export($path, true);
        }

        return '"'.$path.'"';
    }

    /**
     * @param  array<string, array<string, mixed>>  $resources
     */
    protected function renderMap(array $resources): string
    {
        $body = '';

        foreach ($resources as $resource) {
            $methods = '';
            foreach (array_values($resource['methods']) as $index => $method) {
                $methods .= "                {$index} => '{$method['name']}',\n";
            }

            $body .= <<<PHP
        '{$resource['key']}' => [
            'class' => '{$resource['class']}',
            'base' => '{$resource['base']}',
            'methods' => [
{$methods}            ],
        ],

PHP;
        }

        return <<<PHP
<?php

namespace Buffalo\\Api;

/**
 * Map of generated resource accessors on Client::__call.
 *
 * @internal
 */
final class GeneratedResources
{
    public const MAP = [
{$body}    ];
}

PHP;
    }

    /**
     * @param  array<string, array<string, mixed>>  $resources
     */
    protected function renderAccessors(array $resources): string
    {
        $uses = '';
        $methods = '';

        foreach ($resources as $resource) {
            $uses .= "use Buffalo\\Api\\Resources\\{$resource['class']};\n";
            $methods .= <<<PHP

    public function {$resource['accessor']}(): {$resource['class']}
    {
        return new {$resource['class']}(\$this);
    }

PHP;
        }

        return <<<PHP
<?php

namespace Buffalo\\Api;

{$uses}
trait AccessesResources
{{$methods}}

PHP;
    }

    protected function relativePath(string $path): string
    {
        $path = trim(str_replace('\\', '/', $path), '/');
        $path = preg_replace('#^api/#', '', $path) ?? $path;

        return trim($path, '/');
    }

    protected function isParam(string $segment): bool
    {
        return str_starts_with($segment, '{') && str_ends_with($segment, '}');
    }

    protected function paramName(string $segment): string
    {
        $name = $this->methodName(str_replace([':', '?'], '', trim($segment, '{}')));

        return $name !== '' ? $name : 'id';
    }

    protected function className(string $key): string
    {
        return Str::studly($key).'Resource';
    }

    protected function methodName(string $value): string
    {
        $name = Str::camel($value);

        if ($name === '' || preg_match('/^\d/', $name) === 1) {
            $name = 'call'.ucfirst($name);
        }

        if (in_array($name, ['__construct', '__destruct', '__call'], true)) {
            $name = 'invoke'.ucfirst(ltrim($name, '_'));
        }

        return $name;
    }

    protected function readFile(string $path): string
    {
        if (! is_file($path)) {
            throw new RuntimeException("OpenAPI file [{$path}] does not exist.");
        }

        $contents = file_get_contents($path);

        if ($contents === false) {
            throw new RuntimeException("Unable to read OpenAPI file [{$path}].");
        }

        return $contents;
    }

    protected function download(string $url): string
    {
        $contents = file_get_contents($url);

        if ($contents === false) {
            throw new RuntimeException("Unable to download OpenAPI document from [{$url}].");
        }

        return $contents;
    }
}
