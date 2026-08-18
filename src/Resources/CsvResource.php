<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class CsvResource extends Resource
{
    protected function basePath(): string
    {
        return 'csv';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createNewRowInCsvFile(array $data = []): BuffaloResponse
    {
        return $this->post('create-new-row-in-csv-file', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function parseAnimalsCsvFile(array $data = []): BuffaloResponse
    {
        return $this->post('parse-animals-csv-file', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function parseMembersCsvFile(array $data = []): BuffaloResponse
    {
        return $this->post('parse-members-csv-file', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateAnimalCsvFile(array $data = []): BuffaloResponse
    {
        return $this->post('update-animal-csv-file', $data);
    }
}
