<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class PersonUserRolesResource extends Resource
{
    protected function basePath(): string
    {
        return 'person-user-roles';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createPersonUserRole(array $data = []): BuffaloResponse
    {
        return $this->post('create-person-user-role', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deletePersonUserRole(array $data = []): BuffaloResponse
    {
        return $this->post('delete-person-user-role', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getLabUserPermissions(array $query = []): BuffaloResponse
    {
        return $this->get('get-lab-user-permissions', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonUserRoles(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-user-roles', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function setPersonUserRoleForUser(array $data = []): BuffaloResponse
    {
        return $this->post('set-person-user-role-for-user', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updatePersonUserRole(array $data = []): BuffaloResponse
    {
        return $this->post('update-person-user-role', $data);
    }
}
