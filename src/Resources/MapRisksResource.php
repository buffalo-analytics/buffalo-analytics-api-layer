<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class MapRisksResource extends Resource
{
    protected function basePath(): string
    {
        return 'map-risks';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getRiskZonesExportKml(string|int $id, array $query = []): BuffaloResponse
    {
        return $this->get("risk-zones/{$id}/export-kml", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getRiskZonesExportKmz(string|int $id, array $query = []): BuffaloResponse
    {
        return $this->get("risk-zones/{$id}/export-kmz", $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function outbreakData(array $data = []): BuffaloResponse
    {
        return $this->post('outbreak-data', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function riskZones(array $query = []): BuffaloResponse
    {
        return $this->get('risk-zones', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function weatherData(array $data = []): BuffaloResponse
    {
        return $this->post('weather-data', $data);
    }
}
