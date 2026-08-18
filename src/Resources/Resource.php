<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;
use Buffalo\Api\Client;

abstract class Resource
{
    public function __construct(protected Client $client) {}

    abstract protected function basePath(): string;

    /**
     * @param  array<string, mixed>  $query
     */
    protected function get(string $path = '', array $query = []): BuffaloResponse
    {
        return $this->client->send('GET', $this->url($path), query: $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    protected function post(string $path = '', array $data = []): BuffaloResponse
    {
        return $this->client->send('POST', $this->url($path), data: $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    protected function put(string $path = '', array $data = []): BuffaloResponse
    {
        return $this->client->send('PUT', $this->url($path), data: $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    protected function patch(string $path = '', array $data = []): BuffaloResponse
    {
        return $this->client->send('PATCH', $this->url($path), data: $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    protected function delete(string $path = '', array $data = []): BuffaloResponse
    {
        return $this->client->send('DELETE', $this->url($path), data: $data);
    }

    /**
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $files
     */
    protected function upload(string $path, array $data = [], array $files = []): BuffaloResponse
    {
        return $this->client->send('POST', $this->url($path), data: $data, files: $files);
    }

    protected function url(string $path): string
    {
        $base = trim($this->basePath(), '/');
        $path = trim($path, '/');

        if ($base === '') {
            return $path;
        }

        if ($path === '') {
            return $base;
        }

        return $base.'/'.$path;
    }
}
