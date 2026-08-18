<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class SpeciesResource extends Resource
{
    protected function basePath(): string
    {
        return 'species';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function assignSpeciesToZones(array $data = []): BuffaloResponse
    {
        return $this->post('assign-species-to-zones', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function countrySpecies(array $query = []): BuffaloResponse
    {
        return $this->get('country-species', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function countrySpeciesByIds(array $data = []): BuffaloResponse
    {
        return $this->post('country-species-by-ids', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createBreed(array $data = []): BuffaloResponse
    {
        return $this->post('create-breed', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createSpecies(array $data = []): BuffaloResponse
    {
        return $this->post('create-species', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDeleteSpecies(array $data = []): BuffaloResponse
    {
        return $this->delete('delete-species', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllBreeds(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-breeds', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getParentSpecies(array $query = []): BuffaloResponse
    {
        return $this->get('get-parent-species', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSortedSpecies(array $query = []): BuffaloResponse
    {
        return $this->get('get-sorted-species', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSpecies(array $query = []): BuffaloResponse
    {
        return $this->get('get-species', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSpeciesByFarm(array $query = []): BuffaloResponse
    {
        return $this->get('get-species-by-farm', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSpeciesById(array $query = []): BuffaloResponse
    {
        return $this->get('get-species-by-id', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSpeciesMonthlyStats(array $query = []): BuffaloResponse
    {
        return $this->get('get-species-monthly-stats', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function idsForCache(array $query = []): BuffaloResponse
    {
        return $this->get('ids-for-cache', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchUpdateSpecie(array $data = []): BuffaloResponse
    {
        return $this->patch('update-specie', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchBreeds(array $query = []): BuffaloResponse
    {
        return $this->get('search-breeds', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchSpecies(array $query = []): BuffaloResponse
    {
        return $this->get('search-species', $query);
    }
}
