<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class KmzResource extends Resource
{
    protected function basePath(): string
    {
        return 'kmz';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createKmzFile(array $data = []): BuffaloResponse
    {
        return $this->post('create-kmz-file', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createPolygonFromKmz(array $data = []): BuffaloResponse
    {
        return $this->post('create-polygon-from-kmz', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getKmzZones(array $query = []): BuffaloResponse
    {
        return $this->get('get-kmz-zones', $query);
    }
}
