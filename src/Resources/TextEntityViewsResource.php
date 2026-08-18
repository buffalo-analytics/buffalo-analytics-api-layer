<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class TextEntityViewsResource extends Resource
{
    protected function basePath(): string
    {
        return 'text-entity-views';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function personAgreementView(array $query = []): BuffaloResponse
    {
        return $this->get('person-agreement-view', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function userAgreementView(array $query = []): BuffaloResponse
    {
        return $this->get('user-agreement-view', $query);
    }
}
