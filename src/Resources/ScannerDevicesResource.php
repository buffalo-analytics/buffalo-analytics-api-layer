<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class ScannerDevicesResource extends Resource
{
    protected function basePath(): string
    {
        return 'scanner-devices';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function assignVersion(array $data = []): BuffaloResponse
    {
        return $this->post('assign-version', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function create(array $data = []): BuffaloResponse
    {
        return $this->post('create', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function destroy(string|int $uuid, array $data = []): BuffaloResponse
    {
        return $this->delete("{$uuid}", $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIndex(string|int $value, array $query = []): BuffaloResponse
    {
        return $this->get("{$value}", $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchUpdate(string|int $fingerprint, array $data = []): BuffaloResponse
    {
        return $this->patch("{$fingerprint}/update", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function register(array $data = []): BuffaloResponse
    {
        return $this->post('register', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function update(string|int $uuid, array $data = []): BuffaloResponse
    {
        return $this->put("{$uuid}", $data);
    }
}
