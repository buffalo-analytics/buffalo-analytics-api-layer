<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class KmzFilesResource extends Resource
{
    protected function basePath(): string
    {
        return 'kmz-files';
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
    public function createPolygon(array $data = []): BuffaloResponse
    {
        return $this->post('create-polygon', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function zones(array $query = []): BuffaloResponse
    {
        return $this->get('zones', $query);
    }
}
