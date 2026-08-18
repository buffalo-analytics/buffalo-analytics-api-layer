<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class VaccineTrackingResource extends Resource
{
    protected function basePath(): string
    {
        return 'vaccine-tracking';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function featured(array $query = []): BuffaloResponse
    {
        return $this->get('featured', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIndex(string|int $trackingNumber, array $query = []): BuffaloResponse
    {
        return $this->get("{$trackingNumber}", $query);
    }
}
