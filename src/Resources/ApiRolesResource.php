<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class ApiRolesResource extends Resource
{
    protected function basePath(): string
    {
        return 'api-roles';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createRole(array $data = []): BuffaloResponse
    {
        return $this->post('create-role', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteApiRole(array $data = []): BuffaloResponse
    {
        return $this->post('delete-api-role', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getApiRoles(array $query = []): BuffaloResponse
    {
        return $this->get('get-api-roles', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPermissions(array $query = []): BuffaloResponse
    {
        return $this->get('get-permissions', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateRole(array $data = []): BuffaloResponse
    {
        return $this->post('update-role', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateUser(array $data = []): BuffaloResponse
    {
        return $this->post('update-user', $data);
    }
}
