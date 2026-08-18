<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class IntegrationsResource extends Resource
{
    protected function basePath(): string
    {
        return 'integrations';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function aimsAuth(array $data = []): BuffaloResponse
    {
        return $this->post('aims/auth', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function myhuntAuth(array $data = []): BuffaloResponse
    {
        return $this->post('myhunt/auth', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function sosAuth(array $data = []): BuffaloResponse
    {
        return $this->post('sos/auth', $data);
    }
}
