<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class AnimalGroupsResource extends Resource
{
    protected function basePath(): string
    {
        return 'animal-groups';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createAnimalGroup(array $data = []): BuffaloResponse
    {
        return $this->post('create-animal-group', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDeleteAnimalGroup(array $data = []): BuffaloResponse
    {
        return $this->delete('delete-animal-group', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBunrAnimalGroups(array $query = []): BuffaloResponse
    {
        return $this->get('get-bunr-animal-groups', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function mergeAnimalGroups(array $data = []): BuffaloResponse
    {
        return $this->post('merge-animal-groups', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchUpdateAnimalGroup(array $data = []): BuffaloResponse
    {
        return $this->patch('update-animal-group', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchBunrAnimalGroups(array $query = []): BuffaloResponse
    {
        return $this->get('search-bunr-animal-groups', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function splitAnimalGroup(array $data = []): BuffaloResponse
    {
        return $this->post('split-animal-group', $data);
    }
}
