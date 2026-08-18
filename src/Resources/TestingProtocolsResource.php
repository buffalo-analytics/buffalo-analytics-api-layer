<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class TestingProtocolsResource extends Resource
{
    protected function basePath(): string
    {
        return 'testing-protocols';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createProtocol(array $data = []): BuffaloResponse
    {
        return $this->post('create-protocol', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllProtocols(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-protocols', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getProtocolByName(array $query = []): BuffaloResponse
    {
        return $this->get('get-protocol-by-name', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getProtocolBySpeciesName(array $query = []): BuffaloResponse
    {
        return $this->get('get-protocol-by-species-name', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getProtocolTestMethods(array $query = []): BuffaloResponse
    {
        return $this->get('get-protocol-test-methods', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getQuarantineProtocolsByBunr(array $query = []): BuffaloResponse
    {
        return $this->get('get-quarantine-protocols-by-bunr', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSpeciesByProtocol(array $query = []): BuffaloResponse
    {
        return $this->get('get-species-by-protocol', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateProtocol(array $data = []): BuffaloResponse
    {
        return $this->post('update-protocol', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateProtocolName(array $data = []): BuffaloResponse
    {
        return $this->post('update-protocol-name', $data);
    }
}
