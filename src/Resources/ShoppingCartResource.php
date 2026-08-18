<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class ShoppingCartResource extends Resource
{
    protected function basePath(): string
    {
        return 'shopping-cart';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function addToCart(array $query = []): BuffaloResponse
    {
        return $this->get('add-to-cart', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUserCart(array $query = []): BuffaloResponse
    {
        return $this->get('get-user-cart', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function removeItem(array $data = []): BuffaloResponse
    {
        return $this->post('remove-item', $data);
    }
}
