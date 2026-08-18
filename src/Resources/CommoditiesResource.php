<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class CommoditiesResource extends Resource
{
    protected function basePath(): string
    {
        return 'commodities';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createCommoditiesMovement(array $data = []): BuffaloResponse
    {
        return $this->post('create-commodities-movement', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSendCommodities(string|int $id, array $query = []): BuffaloResponse
    {
        return $this->get("send-commodities/{$id}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSendCommoditiesUuid(string|int $uuid, array $query = []): BuffaloResponse
    {
        return $this->get("send-commodities/uuid/{$uuid}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function sendCommodities(array $query = []): BuffaloResponse
    {
        return $this->get('send-commodities', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function sendCommoditiesCheckByCommodityUuid(array $query = []): BuffaloResponse
    {
        return $this->get('send-commodities/check-by-commodity-uuid', $query);
    }
}
