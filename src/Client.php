<?php

namespace Buffalo\Api;

use BadMethodCallException;
use Buffalo\Api\Exceptions\AuthenticationException;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use InvalidArgumentException;

class Client
{
    use AccessesResources;

    public function __construct(
        protected string $baseUrl,
        protected ?string $token = null,
        protected int $timeout = 30,
        protected int $retries = 0,
        protected int $retrySleep = 100,
    ) {
        $this->baseUrl = rtrim($baseUrl, '/');
        $this->token = $this->token !== '' ? $this->token : null;
    }

    public function baseUrl(): string
    {
        return $this->baseUrl;
    }

    public function token(): ?string
    {
        return $this->token;
    }

    public function withToken(?string $token): static
    {
        $this->token = filled($token) ? $token : null;

        return $this;
    }

    /**
     * @param  array<string, mixed>  $credentials
     */
    public function login(string $email, string $password, array $credentials = []): BuffaloResponse
    {
        $response = $this->send('POST', 'auth/login', data: array_merge($credentials, [
            'email' => $email,
            'password' => $password,
        ]));

        $token = $response->json('token');

        if (! is_string($token) || $token === '') {
            throw new AuthenticationException('Buffalo API login did not return a token.');
        }

        $this->token = $token;

        return $response;
    }

    /**
     * @param  array<string, mixed>  $query
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $files
     */
    public function send(string $method, string $path, array $query = [], array $data = [], array $files = []): BuffaloResponse
    {
        $request = $this->pendingRequest($files);
        $path = ltrim($path, '/');
        $method = strtoupper($method);

        $response = match ($method) {
            'GET' => $request->get($path, $query),
            'HEAD' => $request->head($path, $query),
            'POST' => $request->post($path, $data),
            'PUT' => $request->put($path, $data),
            'PATCH' => $request->patch($path, $data),
            'DELETE' => $request->delete($path, $data),
            default => throw new InvalidArgumentException("Unsupported HTTP method [{$method}]."),
        };

        return new BuffaloResponse($response);
    }

    /**
     * @param  array<int, mixed>  $arguments
     */
    public function __call(string $name, array $arguments): mixed
    {
        $key = Str::kebab($name);

        if (! isset(GeneratedResources::MAP[$key])) {
            throw new BadMethodCallException(sprintf(
                'Resource [%s] is not defined on %s.',
                $name,
                static::class,
            ));
        }

        $class = 'Buffalo\\Api\\Resources\\'.GeneratedResources::MAP[$key]['class'];

        return new $class($this);
    }

    /**
     * @param  array<string, mixed>  $files
     */
    protected function pendingRequest(array $files = []): PendingRequest
    {
        $request = Http::baseUrl($this->baseUrl)
            ->acceptJson()
            ->timeout($this->timeout);

        if ($files !== []) {
            $request = $request->asMultipart();

            foreach ($files as $name => $file) {
                $request = $this->attachFile($request, (string) $name, $file);
            }
        } else {
            $request = $request->asJson();
        }

        if (filled($this->token)) {
            $request = $request->withToken((string) $this->token);
        }

        if ($this->retries > 0) {
            $request = $request->retry($this->retries, $this->retrySleep, throw: false);
        }

        return $request;
    }

    protected function attachFile(PendingRequest $request, string $name, mixed $file): PendingRequest
    {
        if (is_array($file)) {
            return $request->attach(
                $name,
                $file['contents'] ?? $file[0] ?? '',
                $file['filename'] ?? $file[1] ?? null,
                $file['headers'] ?? $file[2] ?? [],
            );
        }

        return $request->attach($name, $file);
    }
}
