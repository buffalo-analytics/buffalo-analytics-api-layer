<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class VehiclesResource extends Resource
{
    protected function basePath(): string
    {
        return 'vehicles';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function processBarcode(array $data = []): BuffaloResponse
    {
        return $this->post('process-barcode', $data);
    }
}
