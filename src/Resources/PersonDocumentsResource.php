<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class PersonDocumentsResource extends Resource
{
    protected function basePath(): string
    {
        return 'person-documents';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function approve(array $data = []): BuffaloResponse
    {
        return $this->post('approve', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteRemove(array $data = []): BuffaloResponse
    {
        return $this->delete('remove', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getDocument(array $query = []): BuffaloResponse
    {
        return $this->get('get-document', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getDocumentTypes(array $query = []): BuffaloResponse
    {
        return $this->get('get-document-types', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getDocuments(array $query = []): BuffaloResponse
    {
        return $this->get('get-documents', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getDocumentsForValidation(array $query = []): BuffaloResponse
    {
        return $this->get('get-documents-for-validation', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getHuntingLicenseTypes(array $query = []): BuffaloResponse
    {
        return $this->get('get-hunting-license-types', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function reject(array $data = []): BuffaloResponse
    {
        return $this->post('reject', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function upload(array $data = []): BuffaloResponse
    {
        return $this->post('upload', $data);
    }
}
