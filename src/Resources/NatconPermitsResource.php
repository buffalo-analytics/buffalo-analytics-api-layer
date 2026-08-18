<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class NatconPermitsResource extends Resource
{
    protected function basePath(): string
    {
        return 'natcon-permits';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function approve(array $data = []): BuffaloResponse
    {
        return $this->post('approve', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function get(array $query = []): BuffaloResponse
    {
        return $this->get('get', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getLevels(array $query = []): BuffaloResponse
    {
        return $this->get('get-levels', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchUpdateInfo(array $data = []): BuffaloResponse
    {
        return $this->patch('update-info', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchUpdateSpecies(array $data = []): BuffaloResponse
    {
        return $this->patch('update-species', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function reject(array $data = []): BuffaloResponse
    {
        return $this->post('reject', $data);
    }
}
