<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class VaccineRequestsResource extends Resource
{
    protected function basePath(): string
    {
        return 'vaccine-requests';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function animalsWithRequests(array $query = []): BuffaloResponse
    {
        return $this->get('animals-with-requests', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function attachAuthChains(string|int $id, array $data = []): BuffaloResponse
    {
        return $this->post("{$id}/attach-auth-chains", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function destroy(string|int $id, array $data = []): BuffaloResponse
    {
        return $this->delete("{$id}", $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCheckPersonAccess(string|int $personId, array $query = []): BuffaloResponse
    {
        return $this->get("check-person-access/{$personId}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIndex(string|int $id, array $query = []): BuffaloResponse
    {
        return $this->get("{$id}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonRequests(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-requests', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function personsByChain(array $query = []): BuffaloResponse
    {
        return $this->get('persons/by-chain', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function putUpdate(array $data = []): BuffaloResponse
    {
        return $this->put('update', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function signAuthPerson(string|int $id, array $data = []): BuffaloResponse
    {
        return $this->post("{$id}/sign-auth-person", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function signAuthorizationFile(string|int $id, array $data = []): BuffaloResponse
    {
        return $this->post("{$id}/sign-authorization-file", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function status(string|int $id, array $data = []): BuffaloResponse
    {
        return $this->post("{$id}/status", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function uploadAuthorizationFile(string|int $id, array $data = []): BuffaloResponse
    {
        return $this->post("{$id}/upload-authorization-file", $data);
    }
}
