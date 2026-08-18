<?php

namespace Buffalo\Api\Console;

use Buffalo\Api\Support\OpenApiResourceGenerator;
use Illuminate\Console\Command;

class GenerateResourcesCommand extends Command
{
    protected $signature = 'buffalo-api:generate
        {--from= : Path to the buffalo-api project, OpenAPI JSON, or URL}';

    protected $description = 'Regenerate Buffalo API resource classes from OpenAPI and Laravel route files';

    public function handle(OpenApiResourceGenerator $generator): int
    {
        $from = $this->option('from') ?: (string) config('buffalo-api.openapi');
        $packageRoot = dirname(__DIR__, 2);

        $count = $generator->generateFrom($from, $packageRoot);

        $this->info("Generated {$count} Buffalo API resources from {$from}.");

        return self::SUCCESS;
    }
}
