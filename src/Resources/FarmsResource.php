<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class FarmsResource extends Resource
{
    protected function basePath(): string
    {
        return 'farms';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function addFileToBunr(array $data = []): BuffaloResponse
    {
        return $this->post('add-file-to-bunr', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function addNatconPermit(array $data = []): BuffaloResponse
    {
        return $this->post('add-natcon-permit', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function addSpeciesToNatconPermit(array $data = []): BuffaloResponse
    {
        return $this->post('add-species-to-natcon-permit', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function approveNatconPermit(array $data = []): BuffaloResponse
    {
        return $this->post('approve-natcon-permit', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function checkBunr(array $query = []): BuffaloResponse
    {
        return $this->get('check-bunr', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function checkDefaultFarm(array $query = []): BuffaloResponse
    {
        return $this->get('check-default-farm', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function checkDunevaxFarm(array $query = []): BuffaloResponse
    {
        return $this->get('check-dunevax-farm', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function checkUserFarm(array $query = []): BuffaloResponse
    {
        return $this->get('check-user-farm', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createNewBunr(array $data = []): BuffaloResponse
    {
        return $this->post('create-new-bunr', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createNewFarm(array $data = []): BuffaloResponse
    {
        return $this->post('create-new-farm', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createNewFarmApplication(array $data = []): BuffaloResponse
    {
        return $this->post('create-new-farm-application', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDeleteBunrCertificate(array $data = []): BuffaloResponse
    {
        return $this->delete('delete-bunr-certificate', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDeleteFarmFeatures(array $data = []): BuffaloResponse
    {
        return $this->delete('delete-farm-features', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteRemoveNatconFile(array $data = []): BuffaloResponse
    {
        return $this->delete('remove-natcon-file', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function findFarmsWithinRadius(array $query = []): BuffaloResponse
    {
        return $this->get('find-farms-within-radius', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAdminShapes(array $query = []): BuffaloResponse
    {
        return $this->get('get-admin-shapes', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllFarms(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-farms', $query);
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
    public function getAnimalCsvFiles(array $query = []): BuffaloResponse
    {
        return $this->get('get-animal-csv-files', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalsByCage(array $query = []): BuffaloResponse
    {
        return $this->get('get-animals-by-cage', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBunrAuthorizationPersons(array $query = []): BuffaloResponse
    {
        return $this->get('get-bunr-authorization-persons', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBunrByUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-bunr-by-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBunrFeaturesByBunrUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-bunr-features-by-bunr-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBunrNumbers(array $query = []): BuffaloResponse
    {
        return $this->get('get-bunr-numbers', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBunrPerson(array $query = []): BuffaloResponse
    {
        return $this->get('get-bunr-person', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBunrPin(array $query = []): BuffaloResponse
    {
        return $this->get('get-bunr-pin', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFarm(array $query = []): BuffaloResponse
    {
        return $this->get('get-farm', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFarmAviaries(array $query = []): BuffaloResponse
    {
        return $this->get('get-farm-aviaries', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFarmAviaryCages(array $query = []): BuffaloResponse
    {
        return $this->get('get-farm-aviary-cages', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFarmByName(array $query = []): BuffaloResponse
    {
        return $this->get('get-farm-by-name', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFarmByPoint(array $query = []): BuffaloResponse
    {
        return $this->get('get-farm-by-point', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFarmByUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-farm-by-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFarmWildlifeBlocks(array $query = []): BuffaloResponse
    {
        return $this->get('get-farm-wildlife-blocks', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFarmsByUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-farms-by-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFeatureById(array $query = []): BuffaloResponse
    {
        return $this->get('get-feature-by-id', $query);
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
    public function getFmdProtectionZone(array $query = []): BuffaloResponse
    {
        return $this->get('get-fmd-protection-zone', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getGenerateBunrFile(string|int $fileName, array $query = []): BuffaloResponse
    {
        return $this->get("generate-bunr-file/{$fileName}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getNatconPermitById(array $query = []): BuffaloResponse
    {
        return $this->get('get-natcon-permit-by-id', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getNatconPermitLevels(array $query = []): BuffaloResponse
    {
        return $this->get('get-natcon-permit-levels', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getNatconPermits(array $query = []): BuffaloResponse
    {
        return $this->get('get-natcon-permits', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getNearestFarms(array $query = []): BuffaloResponse
    {
        return $this->get('get-nearest-farms', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonBuNrs(array $query = []): BuffaloResponse
    {
        return $this->get('get-personBuNrs', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonFarms(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-farms', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPortionsByRegionAndTag(array $query = []): BuffaloResponse
    {
        return $this->get('get-portions-by-region-and-tag', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getProvinces(array $query = []): BuffaloResponse
    {
        return $this->get('get-provinces', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getProvincesBorder(array $query = []): BuffaloResponse
    {
        return $this->get('get-provinces-border', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getProvincesInfo(array $query = []): BuffaloResponse
    {
        return $this->get('get-provinces-info', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSpeciesFromNatconPermit(array $query = []): BuffaloResponse
    {
        return $this->get('get-species-from-natcon-permit', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getStateVetAreaByBunr(array $query = []): BuffaloResponse
    {
        return $this->get('get-state-vet-area-by-bunr', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUserFarms(array $query = []): BuffaloResponse
    {
        return $this->get('get-user-farms', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getWildlifeBlockAnimals(array $query = []): BuffaloResponse
    {
        return $this->get('get-wildlife-block-animals', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function importValidatedAnimals(array $data = []): BuffaloResponse
    {
        return $this->post('import-validated-animals', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function isItUsersAnimal(array $query = []): BuffaloResponse
    {
        return $this->get('is-it-users-animal', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function isItUsersFarm(array $query = []): BuffaloResponse
    {
        return $this->get('is-it-users-farm', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function parseAnimalCsvFile(array $data = []): BuffaloResponse
    {
        return $this->post('parse-animal-csv-file', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchAddAnimalsToCage(array $data = []): BuffaloResponse
    {
        return $this->patch('add-animals-to-cage', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchEditBunrData(array $data = []): BuffaloResponse
    {
        return $this->patch('edit-bunr-data', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchEditFarmData(array $data = []): BuffaloResponse
    {
        return $this->patch('edit-farm-data', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchSaveFarmFeatures(array $data = []): BuffaloResponse
    {
        return $this->patch('save-farm-features', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchSavePersonBunrs(array $data = []): BuffaloResponse
    {
        return $this->patch('save-person-bunrs', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchSetDefaultFarm(array $data = []): BuffaloResponse
    {
        return $this->patch('set-default-farm', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchSetDunevaxFarm(array $data = []): BuffaloResponse
    {
        return $this->patch('set-dunevax-farm', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchSetNatconServiceProvider(array $data = []): BuffaloResponse
    {
        return $this->patch('set-natcon-service-provider', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchUpdateFarmBorders(array $data = []): BuffaloResponse
    {
        return $this->patch('update-farm-borders', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchUpdateFeatureById(array $data = []): BuffaloResponse
    {
        return $this->patch('update-feature-by-id', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function rejectNatconPermit(array $data = []): BuffaloResponse
    {
        return $this->post('reject-natcon-permit', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveAnimalCsvFile(array $data = []): BuffaloResponse
    {
        return $this->post('save-animal-csv-file', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveAviaryCage(array $data = []): BuffaloResponse
    {
        return $this->post('save-aviary-cage', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveAviaryCageSeries(array $data = []): BuffaloResponse
    {
        return $this->post('save-aviary-cage-series', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchBunrFeature(array $query = []): BuffaloResponse
    {
        return $this->get('search-bunr-feature', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchFarmByBunr(array $query = []): BuffaloResponse
    {
        return $this->get('search-farm-by-bunr', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchFeaturesByFeatureName(array $query = []): BuffaloResponse
    {
        return $this->get('search-features-by-feature-name', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchNatconPermits(array $query = []): BuffaloResponse
    {
        return $this->get('search-natcon-permits', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchUserFarms(array $query = []): BuffaloResponse
    {
        return $this->get('search-user-farms', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateNatconPermitInfo(array $data = []): BuffaloResponse
    {
        return $this->post('update-natcon-permit-info', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateNatconPermitSpecies(array $data = []): BuffaloResponse
    {
        return $this->post('update-natcon-permit-species', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function uploadNatconFile(array $data = []): BuffaloResponse
    {
        return $this->post('upload-natcon-file', $data);
    }
}
