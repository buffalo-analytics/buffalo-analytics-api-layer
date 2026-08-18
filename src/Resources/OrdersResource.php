<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class OrdersResource extends Resource
{
    protected function basePath(): string
    {
        return 'orders';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function get(array $query = []): BuffaloResponse
    {
        return $this->get('get', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAll(array $query = []): BuffaloResponse
    {
        return $this->get('get-all', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllOrders(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-orders', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getOrder(array $query = []): BuffaloResponse
    {
        return $this->get('get-order', $query);
    }
}
