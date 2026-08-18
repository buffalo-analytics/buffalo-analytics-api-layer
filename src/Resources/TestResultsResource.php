<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class TestResultsResource extends Resource
{
    protected function basePath(): string
    {
        return 'test-results';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllTestResultValues(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-test-result-values', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSpecificTestResults(array $query = []): BuffaloResponse
    {
        return $this->get('get-specific-test-results', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function storeResults(array $data = []): BuffaloResponse
    {
        return $this->post('store-results', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function storeTestResults(array $data = []): BuffaloResponse
    {
        return $this->post('store-test-results', $data);
    }
}
