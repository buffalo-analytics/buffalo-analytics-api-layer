<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class MedicineResource extends Resource
{
    protected function basePath(): string
    {
        return 'medicine';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function animalTreatments(array $query = []): BuffaloResponse
    {
        return $this->get('animal-treatments', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function assignMedicineToAnimals(array $data = []): BuffaloResponse
    {
        return $this->post('assign-medicine-to-animals', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function create(array $data = []): BuffaloResponse
    {
        return $this->post('create', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createMedicine(array $data = []): BuffaloResponse
    {
        return $this->post('create-medicine', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createMedicineBatch(array $data = []): BuffaloResponse
    {
        return $this->post('create-medicine-batch', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createMedicineType(array $data = []): BuffaloResponse
    {
        return $this->post('create-medicine-type', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDelete(array $data = []): BuffaloResponse
    {
        return $this->delete('delete', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDeleteMedicineType(array $data = []): BuffaloResponse
    {
        return $this->delete('delete-medicine-type', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteMedicine(array $data = []): BuffaloResponse
    {
        return $this->post('delete-medicine', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteMedicineBatch(array $data = []): BuffaloResponse
    {
        return $this->post('delete-medicine-batch', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteMedicineType(array $data = []): BuffaloResponse
    {
        return $this->post('delete-medicine-type', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getManufacturers(array $query = []): BuffaloResponse
    {
        return $this->get('get-manufacturers', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMedicine(array $query = []): BuffaloResponse
    {
        return $this->get('get-medicine', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMedicineBatch(array $query = []): BuffaloResponse
    {
        return $this->get('get-medicine-batch', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMedicineBatchForCitt(array $query = []): BuffaloResponse
    {
        return $this->get('get-medicine-batch-for-citt', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMedicineBatchInfoList(array $query = []): BuffaloResponse
    {
        return $this->get('get-medicine-batch-info-list', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMedicineBatches(array $query = []): BuffaloResponse
    {
        return $this->get('get-medicine-batches', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMedicineForCitt(array $query = []): BuffaloResponse
    {
        return $this->get('get-medicine-for-citt', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMedicineInfo(array $query = []): BuffaloResponse
    {
        return $this->get('get-medicine-info', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMedicineInfoList(array $query = []): BuffaloResponse
    {
        return $this->get('get-medicine-info-list', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMedicineType(array $query = []): BuffaloResponse
    {
        return $this->get('get-medicine-type', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMedicineTypesList(array $query = []): BuffaloResponse
    {
        return $this->get('get-medicine-types-list', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMedicinesFromBatch(array $query = []): BuffaloResponse
    {
        return $this->get('get-medicines-from-batch', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMedicinesList(array $query = []): BuffaloResponse
    {
        return $this->get('get-medicines-list', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getVaccineTypesWithMedicines(array $query = []): BuffaloResponse
    {
        return $this->get('get-vaccine-types-with-medicines', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchUpdate(array $data = []): BuffaloResponse
    {
        return $this->patch('update', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchUpdateMedicineType(array $data = []): BuffaloResponse
    {
        return $this->patch('update-medicine-type', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function search(array $query = []): BuffaloResponse
    {
        return $this->get('search', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchBatchByType(array $query = []): BuffaloResponse
    {
        return $this->get('search-batch-by-type', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchMedicine(array $query = []): BuffaloResponse
    {
        return $this->get('search-medicine', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchMedicineBatch(array $query = []): BuffaloResponse
    {
        return $this->get('search-medicine-batch', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchMedicineType(array $query = []): BuffaloResponse
    {
        return $this->get('search-medicine-type', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function setMedicineBatchForCitt(array $data = []): BuffaloResponse
    {
        return $this->post('set-medicine-batch-for-citt', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function setMedicineForCitt(array $data = []): BuffaloResponse
    {
        return $this->post('set-medicine-for-citt', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateMedicine(array $data = []): BuffaloResponse
    {
        return $this->post('update-medicine', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateMedicineBatch(array $data = []): BuffaloResponse
    {
        return $this->post('update-medicine-batch', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateMedicineType(array $data = []): BuffaloResponse
    {
        return $this->post('update-medicine-type', $data);
    }
}
