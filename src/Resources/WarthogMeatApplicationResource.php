<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class WarthogMeatApplicationResource extends Resource
{
    protected function basePath(): string
    {
        return 'warthog-meat-application';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIndex(string|int $fileName, array $query = []): BuffaloResponse
    {
        return $this->get("{$fileName}", $query);
    }
}
