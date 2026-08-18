<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class UnitsResource extends Resource
{
    protected function basePath(): string
    {
        return 'units';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getEuropeUnits(array $query = []): BuffaloResponse
    {
        return $this->get('get-europe-units', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUsaUnits(array $query = []): BuffaloResponse
    {
        return $this->get('get-usa-units', $query);
    }
}
