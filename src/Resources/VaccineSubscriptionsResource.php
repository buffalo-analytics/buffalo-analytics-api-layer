<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class VaccineSubscriptionsResource extends Resource
{
    protected function basePath(): string
    {
        return 'vaccine-subscriptions';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function check(array $query = []): BuffaloResponse
    {
        return $this->get('check', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function putSettings(array $data = []): BuffaloResponse
    {
        return $this->put('settings', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function settings(array $query = []): BuffaloResponse
    {
        return $this->get('settings', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function toggle(array $data = []): BuffaloResponse
    {
        return $this->post('toggle', $data);
    }
}
