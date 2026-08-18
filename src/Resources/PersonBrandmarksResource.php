<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class PersonBrandmarksResource extends Resource
{
    protected function basePath(): string
    {
        return 'person-brandmarks';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function assignToAnimal(array $data = []): BuffaloResponse
    {
        return $this->post('assign-to-animal', $data);
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
    public function deleteDelete(array $data = []): BuffaloResponse
    {
        return $this->delete('delete', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalBrandmark(array $query = []): BuffaloResponse
    {
        return $this->get('get-animal-brandmark', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalBrandmarksById(array $query = []): BuffaloResponse
    {
        return $this->get('get-animal-brandmarks-by-id', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalBrandmarksByUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-animal-brandmarks-by-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAvailable(array $query = []): BuffaloResponse
    {
        return $this->get('get-available', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonBrandmarks(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-brandmarks', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchEdit(array $data = []): BuffaloResponse
    {
        return $this->patch('edit', $data);
    }
}
