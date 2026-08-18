<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class SafariTagsResource extends Resource
{
    protected function basePath(): string
    {
        return 'safari-tags';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function addSafariTagToAnimal(array $data = []): BuffaloResponse
    {
        return $this->post('add-safari-tag-to-animal', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createSafariTag(array $data = []): BuffaloResponse
    {
        return $this->post('create-safari-tag', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDeleteSafariTag(array $data = []): BuffaloResponse
    {
        return $this->delete('delete-safari-tag', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllSafariTags(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-safari-tags', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalBySafariTag(array $query = []): BuffaloResponse
    {
        return $this->get('get-animal-by-safari-tag', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBunrSafariTags(array $query = []): BuffaloResponse
    {
        return $this->get('get-bunr-safari-tags', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSafariTagById(array $query = []): BuffaloResponse
    {
        return $this->get('get-safari-tag-by-id', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSafariTagByTag(array $query = []): BuffaloResponse
    {
        return $this->get('get-safari-tag-by-tag', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSafariTagGroups(array $query = []): BuffaloResponse
    {
        return $this->get('get-safari-tag-groups', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchSafariTagGroup(array $query = []): BuffaloResponse
    {
        return $this->get('search-safari-tag-group', $query);
    }
}
