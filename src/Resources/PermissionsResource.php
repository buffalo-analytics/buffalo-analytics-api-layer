<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class PermissionsResource extends Resource
{
    protected function basePath(): string
    {
        return 'permissions';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function checkUserRolePermission(array $query = []): BuffaloResponse
    {
        return $this->get('check-user-role-permission', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createRoleWithPermissions(array $data = []): BuffaloResponse
    {
        return $this->post('create-role-with-permissions', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDeleteRole(array $data = []): BuffaloResponse
    {
        return $this->delete('delete-role', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function editRole(array $data = []): BuffaloResponse
    {
        return $this->post('edit-role', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllPermissionForPersons(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-permission-for-persons', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllPermissions(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-permissions', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllPermissionsNames(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-permissions-names', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonPermissions(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-permissions', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getRoleById(array $query = []): BuffaloResponse
    {
        return $this->get('get-role-by-id', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getRoleByName(array $query = []): BuffaloResponse
    {
        return $this->get('get-role-by-name', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getRoles(array $query = []): BuffaloResponse
    {
        return $this->get('get-roles', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function hasUserAccessToCreateBseTemplate(array $query = []): BuffaloResponse
    {
        return $this->get('has-user-access-to-create-bse-template', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function savePersonPermissions(array $data = []): BuffaloResponse
    {
        return $this->post('save-person-permissions', $data);
    }
}
