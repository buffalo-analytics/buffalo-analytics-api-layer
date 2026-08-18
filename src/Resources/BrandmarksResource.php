<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class BrandmarksResource extends Resource
{
    protected function basePath(): string
    {
        return 'brandmarks';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function assignBrandmarkToAnimal(array $query = []): BuffaloResponse
    {
        return $this->get('assign-brandmark-to-animal', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createBrandmark(array $data = []): BuffaloResponse
    {
        return $this->post('create-brandmark', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteBrandmark(array $data = []): BuffaloResponse
    {
        return $this->post('delete-brandmark', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function editBrandmark(array $data = []): BuffaloResponse
    {
        return $this->post('edit-brandmark', $data);
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
    public function getAvailableBrandmarks(array $query = []): BuffaloResponse
    {
        return $this->get('get-available-brandmarks', $query);
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
    public function saveBrandmarkImage(array $data = []): BuffaloResponse
    {
        return $this->post('save-brandmark-image', $data);
    }
}
