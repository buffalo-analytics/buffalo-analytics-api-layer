<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class MapboxResource extends Resource
{
    protected function basePath(): string
    {
        return 'mapbox';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function directions(array $query = []): BuffaloResponse
    {
        return $this->get('directions', $query);
    }
}
