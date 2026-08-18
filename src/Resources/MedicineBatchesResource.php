<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class MedicineBatchesResource extends Resource
{
    protected function basePath(): string
    {
        return 'medicine-batches';
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
    public function deleteDelete(array $data = []): BuffaloResponse
    {
        return $this->delete('delete', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getManufacturers(array $query = []): BuffaloResponse
    {
        return $this->get('get-manufacturers', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMedicineBatch(array $query = []): BuffaloResponse
    {
        return $this->get('get-medicine-batch', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMedicineBatchForCitt(array $query = []): BuffaloResponse
    {
        return $this->get('get-medicine-batch-for-citt', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMedicineBatchInfo(array $query = []): BuffaloResponse
    {
        return $this->get('get-medicine-batch-info', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMedicineBatchInfoList(array $query = []): BuffaloResponse
    {
        return $this->get('get-medicine-batch-info-list', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMedicineBatches(array $query = []): BuffaloResponse
    {
        return $this->get('get-medicine-batches', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchUpdate(array $data = []): BuffaloResponse
    {
        return $this->patch('update', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function search(array $query = []): BuffaloResponse
    {
        return $this->get('search', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchByType(array $query = []): BuffaloResponse
    {
        return $this->get('search-by-type', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function setMedicineBatchForCitt(array $data = []): BuffaloResponse
    {
        return $this->post('set-medicine-batch-for-citt', $data);
    }
}
