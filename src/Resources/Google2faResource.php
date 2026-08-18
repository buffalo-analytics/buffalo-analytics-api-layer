<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class Google2faResource extends Resource
{
    protected function basePath(): string
    {
        return 'google2fa';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function debug(array $data = []): BuffaloResponse
    {
        return $this->post('debug', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function get(array $query = []): BuffaloResponse
    {
        return $this->get('get', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function recover(array $data = []): BuffaloResponse
    {
        return $this->post('recover', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function recoverCode(array $query = []): BuffaloResponse
    {
        return $this->get('recover-code', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function verifCode(array $data = []): BuffaloResponse
    {
        return $this->post('verif-code', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function verify(array $data = []): BuffaloResponse
    {
        return $this->post('verify', $data);
    }
}
