<?php

namespace Buffalo\Api;

use Buffalo\Api\Console\GenerateResourcesCommand;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Http\Client\Factory;
use Illuminate\Support\ServiceProvider;

class BuffaloApiServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/buffalo-api.php', 'buffalo-api');

        $this->app->singleton(Client::class, function ($app): Client {
            $config = $app['config']['buffalo-api'];

            return new Client(
                http: $app->make(Factory::class),
                baseUrl: (string) $config['base_url'],
                token: $config['token'] ?: null,
                timeout: (int) $config['timeout'],
                retries: (int) $config['retries'],
                retrySleep: (int) $config['retry_sleep'],
            );
        });

        $this->app->alias(Client::class, 'buffalo-api');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/buffalo-api.php' => config_path('buffalo-api.php'),
            ], 'buffalo-api-config');

            $this->commands([
                GenerateResourcesCommand::class,
            ]);
        }

        if (class_exists(AboutCommand::class)) {
            AboutCommand::add('Buffalo API', fn (): array => [
                'Base URL' => (string) config('buffalo-api.base_url'),
                'Token' => filled(config('buffalo-api.token')) ? 'SET' : 'MISSING',
            ]);
        }
    }
}
