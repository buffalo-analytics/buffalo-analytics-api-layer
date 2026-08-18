<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class MovementAuthorizationResource extends Resource
{
    protected function basePath(): string
    {
        return 'movement-authorization';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function assignLevelsAndZones(array $data = []): BuffaloResponse
    {
        return $this->post('assign-levels-and-zones', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createLevel(array $data = []): BuffaloResponse
    {
        return $this->post('create-level', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDeleteLevel(array $data = []): BuffaloResponse
    {
        return $this->delete('delete-level', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getLevel(array $query = []): BuffaloResponse
    {
        return $this->get('get-level', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getLevels(array $query = []): BuffaloResponse
    {
        return $this->get('get-levels', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonsZones(array $query = []): BuffaloResponse
    {
        return $this->get('get-persons-zones', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUserWithLevel(array $query = []): BuffaloResponse
    {
        return $this->get('get-user-with-level', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUserZones(array $query = []): BuffaloResponse
    {
        return $this->get('get-user-zones', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getZones(array $query = []): BuffaloResponse
    {
        return $this->get('get-zones', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getZonesForPerson(array $query = []): BuffaloResponse
    {
        return $this->get('get-zones-for-person', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getZonesTypes(array $query = []): BuffaloResponse
    {
        return $this->get('get-zones-types', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchUpdateUserLevel(array $data = []): BuffaloResponse
    {
        return $this->patch('update-user-level', $data);
    }
}
