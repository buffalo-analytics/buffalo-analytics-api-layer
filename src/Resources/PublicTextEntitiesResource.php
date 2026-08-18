<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class PublicTextEntitiesResource extends Resource
{
    protected function basePath(): string
    {
        return 'public-text-entities';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getTextByEntityName(array $query = []): BuffaloResponse
    {
        return $this->get('get-text-by-entity-name', $query);
    }
}
