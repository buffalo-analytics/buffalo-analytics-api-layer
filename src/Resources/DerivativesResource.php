<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class DerivativesResource extends Resource
{
    protected function basePath(): string
    {
        return 'derivatives';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function addDerivativesToGroup(array $data = []): BuffaloResponse
    {
        return $this->post('add-derivatives-to-group', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createAnimalDerivative(array $data = []): BuffaloResponse
    {
        return $this->post('create-animal-derivative', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createDerivative(array $data = []): BuffaloResponse
    {
        return $this->post('create-derivative', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createDerivativeGroup(array $data = []): BuffaloResponse
    {
        return $this->post('create-derivative-group', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createDerivativeMethod(array $data = []): BuffaloResponse
    {
        return $this->post('create-derivative-method', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDeleteDerivativeFromGroup(array $data = []): BuffaloResponse
    {
        return $this->delete('delete-derivative-from-group', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDerivativeFromGroup(array $data = []): BuffaloResponse
    {
        return $this->post('delete-derivative-from-group', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function editDerivative(array $data = []): BuffaloResponse
    {
        return $this->post('edit-derivative', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAddDerivativesToGroup(array $query = []): BuffaloResponse
    {
        return $this->get('add-derivatives-to-group', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllDerivativeMethods(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-derivative-methods', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllDerivatives(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-derivatives', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllDerivativesBySpecies(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-derivatives-by-species', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalDerivativeByUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-animal-derivative-by-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getDerivative(array $query = []): BuffaloResponse
    {
        return $this->get('get-derivative', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getDerivativeGroup(array $query = []): BuffaloResponse
    {
        return $this->get('get-derivative-group', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getDerivativeGroups(array $query = []): BuffaloResponse
    {
        return $this->get('get-derivative-groups', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getDerivativeMethods(array $query = []): BuffaloResponse
    {
        return $this->get('get-derivative-methods', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFarmAnimalDerivativeByUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-farm-animal-derivative-by-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFarmAnimalDerivatives(array $query = []): BuffaloResponse
    {
        return $this->get('get-farm-animal-derivatives', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveAnimalDerivativeData(array $data = []): BuffaloResponse
    {
        return $this->post('save-animal-derivative-data', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchDerivatives(array $query = []): BuffaloResponse
    {
        return $this->get('search-derivatives', $query);
    }
}
