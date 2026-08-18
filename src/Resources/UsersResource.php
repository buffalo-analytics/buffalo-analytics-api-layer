<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class UsersResource extends Resource
{
    protected function basePath(): string
    {
        return 'users';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function agreeContract(array $data = []): BuffaloResponse
    {
        return $this->post('agree-contract', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function authUser(array $query = []): BuffaloResponse
    {
        return $this->get('auth-user', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function ban(array $data = []): BuffaloResponse
    {
        return $this->post('ban', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function byEmail(array $query = []): BuffaloResponse
    {
        return $this->get('by-email', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createApiUser(array $data = []): BuffaloResponse
    {
        return $this->post('create-api-user', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteApiUser(array $data = []): BuffaloResponse
    {
        return $this->post('delete-api-user', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDeleteUser(array $data = []): BuffaloResponse
    {
        return $this->delete('delete-user', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function destroy(string|int $userId, array $data = []): BuffaloResponse
    {
        return $this->delete("{$userId}", $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllUsers(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-users', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getApiUser(array $query = []): BuffaloResponse
    {
        return $this->get('get-api-user', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getApiUsers(array $query = []): BuffaloResponse
    {
        return $this->get('get-api-users', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAuthUserModel(array $query = []): BuffaloResponse
    {
        return $this->get('get-auth-user-model', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIndex(string|int $userUid, array $query = []): BuffaloResponse
    {
        return $this->get("{$userUid}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMonthlyUserStats(array $query = []): BuffaloResponse
    {
        return $this->get('get-monthly-user-stats', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUser(array $query = []): BuffaloResponse
    {
        return $this->get('get-user', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUserByEmail(array $query = []): BuffaloResponse
    {
        return $this->get('get-user-by-email', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function googleContacts(array $query = []): BuffaloResponse
    {
        return $this->get('google-contacts', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function linkTelegram(array $data = []): BuffaloResponse
    {
        return $this->post('link-telegram', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function linkWithTelegram(array $data = []): BuffaloResponse
    {
        return $this->post('link-with-telegram', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchBanUser(array $data = []): BuffaloResponse
    {
        return $this->patch('ban-user', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchEditUser(array $data = []): BuffaloResponse
    {
        return $this->patch('edit-user', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function role(string|int $userId, array $data = []): BuffaloResponse
    {
        return $this->post("{$userId}/role", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveSignature(array $data = []): BuffaloResponse
    {
        return $this->post('save-signature', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function search(array $query = []): BuffaloResponse
    {
        return $this->get('search', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchUser(array $query = []): BuffaloResponse
    {
        return $this->get('search-user', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function setRole(array $query = []): BuffaloResponse
    {
        return $this->get('set-role', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function signature(array $data = []): BuffaloResponse
    {
        return $this->post('signature', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function signatureUpload(array $data = []): BuffaloResponse
    {
        return $this->post('signature/upload', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function statsMonthly(array $query = []): BuffaloResponse
    {
        return $this->get('stats/monthly', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function update(string|int $userId, array $data = []): BuffaloResponse
    {
        return $this->put("{$userId}", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateApiUser(array $data = []): BuffaloResponse
    {
        return $this->post('update-api-user', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateAvatar(array $data = []): BuffaloResponse
    {
        return $this->post('update-avatar', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function uploadSignatureImage(array $data = []): BuffaloResponse
    {
        return $this->post('upload-signature-image', $data);
    }
}
