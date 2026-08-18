<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class TpResource extends Resource
{
    protected function basePath(): string
    {
        return 'tp';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getV1(string|int $uuid, array $query = []): BuffaloResponse
    {
        return $this->get("v1/{$uuid}", $query);
    }
}
