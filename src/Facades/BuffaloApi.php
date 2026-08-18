<?php

namespace Buffalo\Api\Facades;

use Buffalo\Api\BuffaloResponse;
use Buffalo\Api\Client;
use Illuminate\Support\Facades\Facade;

/**
 * @method static Client withToken(?string $token)
 * @method static BuffaloResponse login(string $email, string $password, array $credentials = [])
 * @method static BuffaloResponse send(string $method, string $path, array $query = [], array $data = [], array $files = [])
 *
 * @see Client
 */
class BuffaloApi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Client::class;
    }
}
