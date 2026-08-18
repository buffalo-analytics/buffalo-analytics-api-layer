<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class ProductsResource extends Resource
{
    protected function basePath(): string
    {
        return 'products';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function add(array $data = []): BuffaloResponse
    {
        return $this->post('add', $data);
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
    public function getAllProducts(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-products', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBseCertificates(array $query = []): BuffaloResponse
    {
        return $this->get('get-bse-certificates', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIndex(string|int $product, array $query = []): BuffaloResponse
    {
        return $this->get("{$product}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPrice(string|int $product, array $query = []): BuffaloResponse
    {
        return $this->get("{$product}/price", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getProduct(array $query = []): BuffaloResponse
    {
        return $this->get('get-product', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getProductableItems(array $query = []): BuffaloResponse
    {
        return $this->get('get-productable-items', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getProductableTypes(array $query = []): BuffaloResponse
    {
        return $this->get('get-productable-types', $query);
    }
}
