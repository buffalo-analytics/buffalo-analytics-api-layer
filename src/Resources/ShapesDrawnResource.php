<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class ShapesDrawnResource extends Resource
{
    protected function basePath(): string
    {
        return 'shapes-drawn';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createShapesDrawn(array $data = []): BuffaloResponse
    {
        return $this->post('create-shapes-drawn', $data);
    }
}
