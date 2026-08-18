<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class DiseaseRiskPredictionsResource extends Resource
{
    protected function basePath(): string
    {
        return 'disease-risk-predictions';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function batch(array $data = []): BuffaloResponse
    {
        return $this->post('batch', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function dashboard(array $query = []): BuffaloResponse
    {
        return $this->get('dashboard', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getHistory(string|int $bunrUuid, array $query = []): BuffaloResponse
    {
        return $this->get("history/{$bunrUuid}", $query);
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
    public function modelPerformance(array $query = []): BuffaloResponse
    {
        return $this->get('model-performance', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function modelWeights(array $query = []): BuffaloResponse
    {
        return $this->get('model-weights', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function statistics(array $query = []): BuffaloResponse
    {
        return $this->get('statistics', $query);
    }
}
