<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class TextEntitiesResource extends Resource
{
    protected function basePath(): string
    {
        return 'text-entities';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteFilesFromEntity(array $data = []): BuffaloResponse
    {
        return $this->post('delete-files-from-entity', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function editText(array $data = []): BuffaloResponse
    {
        return $this->post('edit-text', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getTextEntities(array $query = []): BuffaloResponse
    {
        return $this->get('get-text-entities', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getTextEntityFiles(array $query = []): BuffaloResponse
    {
        return $this->get('get-text-entity-files', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getTextsByEntityName(array $query = []): BuffaloResponse
    {
        return $this->get('get-texts-by-entity-name', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveAgreement(array $data = []): BuffaloResponse
    {
        return $this->post('save-agreement', $data);
    }
}
