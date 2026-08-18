<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class ScanTagsResource extends Resource
{
    protected function basePath(): string
    {
        return 'scan-tags';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function bulkScan(array $data = []): BuffaloResponse
    {
        return $this->post('bulk-scan', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAll(array $query = []): BuffaloResponse
    {
        return $this->get('get-all', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function scan(array $data = []): BuffaloResponse
    {
        return $this->post('scan', $data);
    }
}
