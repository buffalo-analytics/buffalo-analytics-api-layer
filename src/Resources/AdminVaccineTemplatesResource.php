<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class AdminVaccineTemplatesResource extends Resource
{
    protected function basePath(): string
    {
        return 'admin/vaccine-templates';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function active(array $query = []): BuffaloResponse
    {
        return $this->get('active', $query);
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
    public function getIndex(string|int $id, array $query = []): BuffaloResponse
    {
        return $this->get("{$id}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function index(array $query = []): BuffaloResponse
    {
        return $this->get('', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function store(array $data = []): BuffaloResponse
    {
        return $this->post('', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function toggleActive(string|int $id, array $data = []): BuffaloResponse
    {
        return $this->post("{$id}/toggle-active", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function update(string|int $id, array $data = []): BuffaloResponse
    {
        return $this->put("{$id}", $data);
    }
}
