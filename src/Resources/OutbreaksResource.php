<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class OutbreaksResource extends Resource
{
    protected function basePath(): string
    {
        return 'outbreaks';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function diseases(array $query = []): BuffaloResponse
    {
        return $this->get('diseases', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function events(array $query = []): BuffaloResponse
    {
        return $this->get('events', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIndex(string|int $diseaseOutbreak, array $query = []): BuffaloResponse
    {
        return $this->get("{$diseaseOutbreak}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function list(array $query = []): BuffaloResponse
    {
        return $this->get('list', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function nearby(array $query = []): BuffaloResponse
    {
        return $this->get('nearby', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function statistics(array $query = []): BuffaloResponse
    {
        return $this->get('statistics', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function timeline(array $query = []): BuffaloResponse
    {
        return $this->get('timeline', $query);
    }
}
