<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class FarmDiseaseRiskTimeseriesResource extends Resource
{
    protected function basePath(): string
    {
        return 'farm-disease-risk-timeseries';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function farmsCalculate(string|int $farmId, array $data = []): BuffaloResponse
    {
        return $this->post("farms/{$farmId}/calculate", $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBunrRisks(string|int $bunrUuid, array $query = []): BuffaloResponse
    {
        return $this->get("bunr/{$bunrUuid}/risks", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFarmsCompareDiseases(string|int $farmId, array $query = []): BuffaloResponse
    {
        return $this->get("farms/{$farmId}/compare-diseases", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFarmsLatest(string|int $farmId, array $query = []): BuffaloResponse
    {
        return $this->get("farms/{$farmId}/latest", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFarmsTimeseries(string|int $farmId, array $query = []): BuffaloResponse
    {
        return $this->get("farms/{$farmId}/timeseries", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFarmsTrends(string|int $farmId, array $query = []): BuffaloResponse
    {
        return $this->get("farms/{$farmId}/trends", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function highRisk(array $query = []): BuffaloResponse
    {
        return $this->get('high-risk', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function summary(array $query = []): BuffaloResponse
    {
        return $this->get('summary', $query);
    }
}
