<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class IccDeviceResource extends Resource
{
    protected function basePath(): string
    {
        return 'icc-device';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function all(array $query = []): BuffaloResponse
    {
        return $this->get('all', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function destroy(string|int $id, array $data = []): BuffaloResponse
    {
        return $this->delete("{$id}", $data);
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
    public function update(string|int $id, array $data = []): BuffaloResponse
    {
        return $this->patch("{$id}", $data);
    }
}
