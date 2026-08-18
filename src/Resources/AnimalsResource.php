<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class AnimalsResource extends Resource
{
    protected function basePath(): string
    {
        return 'animals';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function animalHasBeenFound(array $data = []): BuffaloResponse
    {
        return $this->post('animal-has-been-found', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function assignMeasurementToAnimal(array $data = []): BuffaloResponse
    {
        return $this->post('assign-measurement-to-animal', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createAnimal(array $data = []): BuffaloResponse
    {
        return $this->post('create-animal', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createAnimalFile(array $data = []): BuffaloResponse
    {
        return $this->post('create-animal-file', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createAnimalGroup(array $data = []): BuffaloResponse
    {
        return $this->post('create-animal-group', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createAnimalTag(array $data = []): BuffaloResponse
    {
        return $this->post('create-animal-tag', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createExternalTags(array $data = []): BuffaloResponse
    {
        return $this->post('create-external-tags', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function createMeasurementAttribute(array $query = []): BuffaloResponse
    {
        return $this->get('create-measurement-attribute', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createMeasurementForAnimal(array $data = []): BuffaloResponse
    {
        return $this->post('create-measurement-for-animal', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createMeasurementType(array $data = []): BuffaloResponse
    {
        return $this->post('create-measurement-type', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteAnimal(array $data = []): BuffaloResponse
    {
        return $this->post('delete-animal', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteAnimalGroup(array $data = []): BuffaloResponse
    {
        return $this->post('delete-animal-group', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteAnimalImage(array $data = []): BuffaloResponse
    {
        return $this->post('delete-animal-image', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteAnimalTag(array $data = []): BuffaloResponse
    {
        return $this->post('delete-animal-tag', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDeleteExternalTag(array $data = []): BuffaloResponse
    {
        return $this->delete('delete-external-tag', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function editAnimalTag(array $data = []): BuffaloResponse
    {
        return $this->post('edit-animal-tag', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function editExternalTag(array $data = []): BuffaloResponse
    {
        return $this->post('edit-external-tag', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function exportTraceability(array $query = []): BuffaloResponse
    {
        return $this->get('export-traceability', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllAnimalTags(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-animal-tags', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllAnimals(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-animals', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllMeasurements(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-measurements', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalByTag(array $query = []): BuffaloResponse
    {
        return $this->get('get-animal-by-tag', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalByUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-animal-by-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalFamilyTreeByUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-animal-family-tree-by-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalHistoryByHistoryId(array $query = []): BuffaloResponse
    {
        return $this->get('get-animal-history-by-history-id', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalImages(array $query = []): BuffaloResponse
    {
        return $this->get('get-animal-images', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalMeasurementHeadersByUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-animal-measurement-headers-by-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalMeasurementValuesByUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-animal-measurement-values-by-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalMeasurementsByUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-animal-measurements-by-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalOwnershipHistory(array $query = []): BuffaloResponse
    {
        return $this->get('get-animal-ownership-history', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalPerformanceData(array $query = []): BuffaloResponse
    {
        return $this->get('get-animal-performance-data', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalsByBunrId(array $query = []): BuffaloResponse
    {
        return $this->get('get-animals-by-bunr-id', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalsByIsolationId(array $query = []): BuffaloResponse
    {
        return $this->get('get-animals-by-isolation-id', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalsByIsolationIdAndBunrUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-animals-by-isolation-id-and-bunr-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalsWithFilters(array $query = []): BuffaloResponse
    {
        return $this->get('get-animals-with-filters', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBunrAnimalGroups(array $query = []): BuffaloResponse
    {
        return $this->get('get-bunr-animal-groups', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCreateAnimalTag(array $query = []): BuffaloResponse
    {
        return $this->get('create-animal-tag', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getEditAnimalTag(array $query = []): BuffaloResponse
    {
        return $this->get('edit-animal-tag', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMeasurementAttributes(array $query = []): BuffaloResponse
    {
        return $this->get('get-measurement-attributes', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMeasurementByType(array $query = []): BuffaloResponse
    {
        return $this->get('get-measurement-by-type', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMeasurementTypes(array $query = []): BuffaloResponse
    {
        return $this->get('get-measurement-types', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMonthlyBuffaloStats(array $query = []): BuffaloResponse
    {
        return $this->get('get-monthly-buffalo-stats', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getScannedTags(array $query = []): BuffaloResponse
    {
        return $this->get('get-scanned-tags', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSources(array $query = []): BuffaloResponse
    {
        return $this->get('get-sources', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUpdateAnimalTags(array $query = []): BuffaloResponse
    {
        return $this->get('update-animal-tags', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUserAnimalTags(array $query = []): BuffaloResponse
    {
        return $this->get('get-user-animal-tags', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function mergeAnimalGroups(array $data = []): BuffaloResponse
    {
        return $this->post('merge-animal-groups', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function removeAnimalFromFamilyTree(array $data = []): BuffaloResponse
    {
        return $this->post('remove-animal-from-family-tree', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveAnimalsFromCsv(array $data = []): BuffaloResponse
    {
        return $this->post('save-animals-from-csv', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveAnimalsToWildlifeBlock(array $data = []): BuffaloResponse
    {
        return $this->post('save-animals-to-wildlife-block', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchAnimalTag(array $query = []): BuffaloResponse
    {
        return $this->get('search-animal-tag', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchAnimalTagWithGender(array $query = []): BuffaloResponse
    {
        return $this->get('search-animal-tag-with-gender', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchAnimals(array $query = []): BuffaloResponse
    {
        return $this->get('search-animals', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchUserAnimalTag(array $query = []): BuffaloResponse
    {
        return $this->get('search-user-animal-tag', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function splitAnimalGroup(array $data = []): BuffaloResponse
    {
        return $this->post('split-animal-group', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateAnimal(array $data = []): BuffaloResponse
    {
        return $this->post('update-animal', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateAnimalData(array $data = []): BuffaloResponse
    {
        return $this->post('update-animal-data', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateAnimalGroup(array $data = []): BuffaloResponse
    {
        return $this->post('update-animal-group', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateAnimalMeasurement(array $data = []): BuffaloResponse
    {
        return $this->post('update-animal-measurement', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateAnimalNote(array $data = []): BuffaloResponse
    {
        return $this->post('update-animal-note', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateAnimalTags(array $data = []): BuffaloResponse
    {
        return $this->post('update-animal-tags', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function updateAttribute(array $query = []): BuffaloResponse
    {
        return $this->get('update-attribute', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateMeasurement(array $data = []): BuffaloResponse
    {
        return $this->post('update-measurement', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateRingNumber(array $data = []): BuffaloResponse
    {
        return $this->post('update-ring-number', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function uploadImages(array $data = []): BuffaloResponse
    {
        return $this->post('upload-images', $data);
    }
}
