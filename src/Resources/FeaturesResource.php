<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class FeaturesResource extends Resource
{
    protected function basePath(): string
    {
        return 'features';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalCampsHistory(array $query = []): BuffaloResponse
    {
        return $this->get('get-animal-camps-history', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBunrFeatures(array $query = []): BuffaloResponse
    {
        return $this->get('get-bunr-features', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFeatureByUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-feature-by-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getWildlifeBlockAnimals(array $query = []): BuffaloResponse
    {
        return $this->get('get-wildlife-block-animals', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchBunrFeatures(array $query = []): BuffaloResponse
    {
        return $this->get('search-bunr-features', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchFeaturesByFeatureName(array $query = []): BuffaloResponse
    {
        return $this->get('search-features-by-feature-name', $query);
    }
}
