<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class ScannerVersionResource extends Resource
{
    protected function basePath(): string
    {
        return 'scanner-version';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getLastVersion(array $query = []): BuffaloResponse
    {
        return $this->get('get-last-version', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getVersion(array $query = []): BuffaloResponse
    {
        return $this->get('get-version', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveNewVersion(array $data = []): BuffaloResponse
    {
        return $this->post('save-new-version', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateVersion(array $data = []): BuffaloResponse
    {
        return $this->post('update-version', $data);
    }
}
