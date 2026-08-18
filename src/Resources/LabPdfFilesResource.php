<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class LabPdfFilesResource extends Resource
{
    protected function basePath(): string
    {
        return 'lab-pdf-files';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function generateMovementFile(array $data = []): BuffaloResponse
    {
        return $this->post('generate-movement-file', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function generateResultsFile(array $data = []): BuffaloResponse
    {
        return $this->post('generate-results-file', $data);
    }
}
