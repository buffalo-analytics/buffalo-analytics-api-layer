<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class AnimalParentGroupsResource extends Resource
{
    protected function basePath(): string
    {
        return 'animal-parent-groups';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function addAnimalToFamilyTree(array $query = []): BuffaloResponse
    {
        return $this->get('add-animal-to-family-tree', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function createParentGroup(array $query = []): BuffaloResponse
    {
        return $this->get('create-parent-group', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function setParents(array $query = []): BuffaloResponse
    {
        return $this->get('set-parents', $query);
    }
}
