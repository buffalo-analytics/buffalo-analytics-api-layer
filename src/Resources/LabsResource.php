<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class LabsResource extends Resource
{
    protected function basePath(): string
    {
        return 'labs';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAvailableLabByTestName(array $query = []): BuffaloResponse
    {
        return $this->get('get-available-lab-by-test-name', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAvailableLabMethodsByAnimalTag(array $query = []): BuffaloResponse
    {
        return $this->get('get-available-lab-methods-by-animal-tag', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAvailableLabsByTestName(array $query = []): BuffaloResponse
    {
        return $this->get('get-available-labs-by-test-name', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getLabProperties(array $query = []): BuffaloResponse
    {
        return $this->get('get-lab-properties', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function storeLabProperties(array $data = []): BuffaloResponse
    {
        return $this->post('store-lab-properties', $data);
    }
}
