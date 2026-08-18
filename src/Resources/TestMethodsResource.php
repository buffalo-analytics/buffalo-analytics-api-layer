<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class TestMethodsResource extends Resource
{
    protected function basePath(): string
    {
        return 'test-methods';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createTestMethod(array $data = []): BuffaloResponse
    {
        return $this->post('create-test-method', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteTestMethod(array $data = []): BuffaloResponse
    {
        return $this->post('delete-test-method', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllTestMethod(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-test-method', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllTestMethods(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-test-methods', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllTestMethodsList(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-test-methods-list', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCreateTestMethod(array $query = []): BuffaloResponse
    {
        return $this->get('create-test-method', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getTestMethodsByTestId(array $query = []): BuffaloResponse
    {
        return $this->get('get-test-methods-by-test-id', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchTestMethod(array $query = []): BuffaloResponse
    {
        return $this->get('search-test-method', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateTestMethod(array $data = []): BuffaloResponse
    {
        return $this->post('update-test-method', $data);
    }
}
