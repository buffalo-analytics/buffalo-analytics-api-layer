<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class DepotOrdersResource extends Resource
{
    protected function basePath(): string
    {
        return 'depot-orders';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllDepotOrders(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-depot-orders', $query);
    }
}
