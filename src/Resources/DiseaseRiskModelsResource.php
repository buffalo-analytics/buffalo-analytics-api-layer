<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class DiseaseRiskModelsResource extends Resource
{
    protected function basePath(): string
    {
        return 'disease-risk-models';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIndex(string|int $diseaseCode, array $query = []): BuffaloResponse
    {
        return $this->get("{$diseaseCode}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPerformance(string|int $diseaseCode, array $query = []): BuffaloResponse
    {
        return $this->get("{$diseaseCode}/performance", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getVersions(string|int $diseaseCode, array $query = []): BuffaloResponse
    {
        return $this->get("{$diseaseCode}/versions", $query);
    }
}
