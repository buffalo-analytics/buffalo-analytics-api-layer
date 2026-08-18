<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class PersonMailTemplatesResource extends Resource
{
    protected function basePath(): string
    {
        return 'person-mail-templates';
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
    public function createMailTemplate(array $data = []): BuffaloResponse
    {
        return $this->post('create-mail-template', $data);
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
    public function getEnumValues(array $query = []): BuffaloResponse
    {
        return $this->get('get-enum-values', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMailTemplate(array $query = []): BuffaloResponse
    {
        return $this->get('get-mail-template', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMailTemplateReplacementItems(array $query = []): BuffaloResponse
    {
        return $this->get('get-mail-template-replacement-items', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMailTemplatesEnum(array $query = []): BuffaloResponse
    {
        return $this->get('get-mail-templates-enum', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getReplacementItems(array $query = []): BuffaloResponse
    {
        return $this->get('get-replacement-items', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchUpdate(array $data = []): BuffaloResponse
    {
        return $this->patch('update', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateMailTemplate(array $data = []): BuffaloResponse
    {
        return $this->post('update-mail-template', $data);
    }
}
