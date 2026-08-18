<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class TestsResource extends Resource
{
    protected function basePath(): string
    {
        return 'tests';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createTest(array $data = []): BuffaloResponse
    {
        return $this->post('create-test', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteTest(array $data = []): BuffaloResponse
    {
        return $this->post('delete-test', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function editTest(array $data = []): BuffaloResponse
    {
        return $this->post('edit-test', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllTest(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-test', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllTests(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-tests', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getChildTests(array $query = []): BuffaloResponse
    {
        return $this->get('get-child-tests', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCreateTest(array $query = []): BuffaloResponse
    {
        return $this->get('create-test', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getEditTest(array $query = []): BuffaloResponse
    {
        return $this->get('edit-test', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getParentTests(array $query = []): BuffaloResponse
    {
        return $this->get('get-parent-tests', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchTest(array $query = []): BuffaloResponse
    {
        return $this->get('search-test', $query);
    }
}
