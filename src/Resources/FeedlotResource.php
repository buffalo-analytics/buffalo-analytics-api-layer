<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class FeedlotResource extends Resource
{
    protected function basePath(): string
    {
        return 'feedlot';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function intake(array $data = []): BuffaloResponse
    {
        return $this->post('intake', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function releaseRfid(array $data = []): BuffaloResponse
    {
        return $this->post('release-rfid', $data);
    }
}
