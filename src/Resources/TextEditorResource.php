<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class TextEditorResource extends Resource
{
    protected function basePath(): string
    {
        return 'text-editor';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteFiles(array $data = []): BuffaloResponse
    {
        return $this->post('delete-files', $data);
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
    public function getEntities(array $query = []): BuffaloResponse
    {
        return $this->get('get-entities', $query);
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
    public function save{entity}(array $data = []): BuffaloResponse
    {
        return $this->post('save-{entity}', $data);
    }
}
