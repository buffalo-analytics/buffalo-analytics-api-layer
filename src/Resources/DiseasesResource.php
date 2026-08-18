<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class DiseasesResource extends Resource
{
    protected function basePath(): string
    {
        return 'diseases';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createDisease(array $data = []): BuffaloResponse
    {
        return $this->post('create-disease', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDisease(array $data = []): BuffaloResponse
    {
        return $this->post('delete-disease', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllDiseases(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-diseases', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCreateDisease(array $query = []): BuffaloResponse
    {
        return $this->get('create-disease', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getDiseaseByName(array $query = []): BuffaloResponse
    {
        return $this->get('get-disease-by-name', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFmdCountryDaily(array $query = []): BuffaloResponse
    {
        return $this->get('get-fmd-country-daily', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFmdDailyTrends(array $query = []): BuffaloResponse
    {
        return $this->get('get-fmd-daily-trends', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFmdStats(array $query = []): BuffaloResponse
    {
        return $this->get('get-fmd-stats', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getParentDiseases(array $query = []): BuffaloResponse
    {
        return $this->get('get-parent-diseases', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchDisease(array $query = []): BuffaloResponse
    {
        return $this->get('search-disease', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateDisease(array $data = []): BuffaloResponse
    {
        return $this->post('update-disease', $data);
    }
}
