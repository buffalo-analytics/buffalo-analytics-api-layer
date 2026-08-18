<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class QrAuthResource extends Resource
{
    protected function basePath(): string
    {
        return 'qr-auth';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getApprove(string|int $token, array $query = []): BuffaloResponse
    {
        return $this->get("approve/{$token}", $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function initiate(array $data = []): BuffaloResponse
    {
        return $this->post('initiate', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function status(array $query = []): BuffaloResponse
    {
        return $this->get('status', $query);
    }
}
