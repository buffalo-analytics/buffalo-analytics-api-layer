<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class RisksResource extends Resource
{
    protected function basePath(): string
    {
        return 'risks';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function assessFarms(array $data = []): BuffaloResponse
    {
        return $this->post('assess-farms', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function communityReports(array $query = []): BuffaloResponse
    {
        return $this->get('community-reports', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function outbreaks(array $query = []): BuffaloResponse
    {
        return $this->get('outbreaks', $query);
    }
}
