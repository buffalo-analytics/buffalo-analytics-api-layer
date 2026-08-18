<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class PersonRolesResource extends Resource
{
    protected function basePath(): string
    {
        return 'person-roles';
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
    public function deleteDeletePersonUserRole(array $data = []): BuffaloResponse
    {
        return $this->delete('delete-person-user-role', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function editUsersPersonRole(array $query = []): BuffaloResponse
    {
        return $this->get('edit-users-person-role', $query);
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
     * @param  array<string, mixed>  $query
     */
    public function setPersonUserRoleForUser(array $query = []): BuffaloResponse
    {
        return $this->get('set-person-user-role-for-user', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updatePersonUserRole(array $data = []): BuffaloResponse
    {
        return $this->post('update-person-user-role', $data);
    }
}
