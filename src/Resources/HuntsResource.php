<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class HuntsResource extends Resource
{
    protected function basePath(): string
    {
        return 'hunts';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function addHuntToHuntingPeriod(array $data = []): BuffaloResponse
    {
        return $this->post('add-hunt-to-hunting-period', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function addHuntingPeriod(array $data = []): BuffaloResponse
    {
        return $this->post('add-hunting-period', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllOutfitterHuntingPeriods(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-outfitter-hunting-periods', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getHuntByHunter(array $query = []): BuffaloResponse
    {
        return $this->get('get-hunt-by-hunter', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getHuntingPeriodsByOutfitter(array $query = []): BuffaloResponse
    {
        return $this->get('get-hunting-periods-by-outfitter', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPartsOfTrophy(array $query = []): BuffaloResponse
    {
        return $this->get('get-parts-of-trophy', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPartsOfTrophyByHunt(array $query = []): BuffaloResponse
    {
        return $this->get('get-parts-of-trophy-by-hunt', $query);
    }
}
