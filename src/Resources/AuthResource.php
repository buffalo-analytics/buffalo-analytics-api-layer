<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class AuthResource extends Resource
{
    protected function basePath(): string
    {
        return 'auth';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function firebaseOauth(array $data = []): BuffaloResponse
    {
        return $this->post('firebase-oauth', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function forgotPassword(array $data = []): BuffaloResponse
    {
        return $this->post('forgot-password', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function getAuthUser(array $data = []): BuffaloResponse
    {
        return $this->post('get-auth-user', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function login(array $data = []): BuffaloResponse
    {
        return $this->post('login', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function reg(array $data = []): BuffaloResponse
    {
        return $this->post('reg', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function resetPassword(array $query = []): BuffaloResponse
    {
        return $this->get('reset-password', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function sendVerificationCode(array $data = []): BuffaloResponse
    {
        return $this->post('send-verification-code', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function sendVerificationEmail(array $data = []): BuffaloResponse
    {
        return $this->post('send-verification-email', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function signOut(array $data = []): BuffaloResponse
    {
        return $this->post('sign-out', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updatePassword(array $data = []): BuffaloResponse
    {
        return $this->post('update-password', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function user(array $query = []): BuffaloResponse
    {
        return $this->get('user', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function userWithPermissions(array $query = []): BuffaloResponse
    {
        return $this->get('user-with-permissions', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function usersUpdateUserPassword(array $data = []): BuffaloResponse
    {
        return $this->post('users/update-user-password', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function verifyCode(array $data = []): BuffaloResponse
    {
        return $this->post('verify-code', $data);
    }
}
