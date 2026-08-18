<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class IsolationsResource extends Resource
{
    protected function basePath(): string
    {
        return 'isolations';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function addNewAnimalsInRound(array $data = []): BuffaloResponse
    {
        return $this->post('add-new-animals-in-round', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function addNewRound(array $data = []): BuffaloResponse
    {
        return $this->post('add-new-round', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function animalIsolationStats(array $query = []): BuffaloResponse
    {
        return $this->get('animal-isolation-stats', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function closeIsolation(array $data = []): BuffaloResponse
    {
        return $this->post('close-isolation', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function createInstituteRef(array $query = []): BuffaloResponse
    {
        return $this->get('create-institute-ref', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createIsolation(array $data = []): BuffaloResponse
    {
        return $this->post('create-isolation', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createIsolationRound(array $data = []): BuffaloResponse
    {
        return $this->post('create-isolation-round', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function createLabRef(array $query = []): BuffaloResponse
    {
        return $this->get('create-lab-ref', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteAnimalsFromRound(array $data = []): BuffaloResponse
    {
        return $this->post('delete-animals-from-round', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDeleteTestFromRound(array $data = []): BuffaloResponse
    {
        return $this->delete('delete-test-from-round', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteIsolation(array $data = []): BuffaloResponse
    {
        return $this->post('delete-isolation', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function editIsolationTestResult(array $data = []): BuffaloResponse
    {
        return $this->post('edit-isolation-test-result', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function export(array $query = []): BuffaloResponse
    {
        return $this->get('export', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllIsolations(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-isolations', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllRoundDetails(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-round-details', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAuctionReport(array $query = []): BuffaloResponse
    {
        return $this->get('get-auction-report', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAvailableIsolationsForUser(array $query = []): BuffaloResponse
    {
        return $this->get('get-available-isolations-for-user', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAvailableProtocolTests(array $query = []): BuffaloResponse
    {
        return $this->get('get-available-protocol-tests', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCittResults(array $query = []): BuffaloResponse
    {
        return $this->get('get-citt-results', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCittTester(array $query = []): BuffaloResponse
    {
        return $this->get('get-citt-tester', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCreateIsolation(array $query = []): BuffaloResponse
    {
        return $this->get('create-isolation', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getExtraTestDates(array $query = []): BuffaloResponse
    {
        return $this->get('get-extra-test-dates', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIsolationAnimalsByBunr(array $query = []): BuffaloResponse
    {
        return $this->get('get-isolation-animals-by-bunr', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIsolationAnimalsByBunrAndSpecies(array $query = []): BuffaloResponse
    {
        return $this->get('get-isolation-animals-by-bunr-and-species', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIsolationAnimalsByIsolationId(array $query = []): BuffaloResponse
    {
        return $this->get('get-isolation-animals-by-isolation-id', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIsolationByBunr(array $query = []): BuffaloResponse
    {
        return $this->get('get-isolation-by-bunr', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIsolationByBunrUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-isolation-by-bunr-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIsolationById(array $query = []): BuffaloResponse
    {
        return $this->get('get-isolation-by-id', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIsolationRoundByIsolationId(array $query = []): BuffaloResponse
    {
        return $this->get('get-isolation-round-by-isolation-id', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIsolationStatistics(array $query = []): BuffaloResponse
    {
        return $this->get('get-isolation-statistics', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIsolationsForSpecificPersons(array $query = []): BuffaloResponse
    {
        return $this->get('get-isolations-for-specific-persons', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getLabTestResultsHeaders(array $query = []): BuffaloResponse
    {
        return $this->get('get-lab-test-results-headers', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getLabTestResultsItems(array $query = []): BuffaloResponse
    {
        return $this->get('get-lab-test-results-items', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getLabUserIsolation(array $query = []): BuffaloResponse
    {
        return $this->get('get-lab-user-isolation', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPurposeOfTestingAndSpecimens(array $query = []): BuffaloResponse
    {
        return $this->get('get-purpose-of-testing-and-specimens', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getRoundAnimals(array $query = []): BuffaloResponse
    {
        return $this->get('get-round-animals', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getRoundFiles(array $query = []): BuffaloResponse
    {
        return $this->get('get-round-files', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getRoundRefs(array $query = []): BuffaloResponse
    {
        return $this->get('get-round-refs', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getTbReport(array $query = []): BuffaloResponse
    {
        return $this->get('get-tb-report', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getTbReports(array $query = []): BuffaloResponse
    {
        return $this->get('get-tb-reports', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUpdateIsolation(array $query = []): BuffaloResponse
    {
        return $this->get('update-isolation', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUserSpecificRound(array $query = []): BuffaloResponse
    {
        return $this->get('get-user-specific-round', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function lockIsolation(array $data = []): BuffaloResponse
    {
        return $this->post('lock-isolation', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function monthlyIsolationMetrics(array $query = []): BuffaloResponse
    {
        return $this->get('monthly-isolation-metrics', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function newCumulativeIsolations(array $query = []): BuffaloResponse
    {
        return $this->get('new-cumulative-isolations', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function postSearchIsolation(array $data = []): BuffaloResponse
    {
        return $this->post('search-isolation', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function postSearchMyIsolation(array $data = []): BuffaloResponse
    {
        return $this->post('search-my-isolation', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function removeFromIsolation(array $data = []): BuffaloResponse
    {
        return $this->post('remove-from-isolation', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveAnimalTestResultsFile(array $data = []): BuffaloResponse
    {
        return $this->post('save-animal-test-results-file', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveAnimalTestResultsFileForSpecificResult(array $data = []): BuffaloResponse
    {
        return $this->post('save-animal-test-results-file-for-specific-result', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function saveLabToIsolationRoundTest(array $query = []): BuffaloResponse
    {
        return $this->get('save-lab-to-isolation-round-test', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveParentTestResultFile(array $data = []): BuffaloResponse
    {
        return $this->post('save-parent-test-result-file', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveProtocolToIsolationRound(array $data = []): BuffaloResponse
    {
        return $this->post('save-protocol-to-isolation-round', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveRoundTestResult(array $data = []): BuffaloResponse
    {
        return $this->post('save-round-test-result', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveSampleRef(array $data = []): BuffaloResponse
    {
        return $this->post('save-sample-ref', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function saveSpecimens(array $query = []): BuffaloResponse
    {
        return $this->get('save-specimens', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveTbResults(array $data = []): BuffaloResponse
    {
        return $this->post('save-tb-results', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveTestResultsFile(array $data = []): BuffaloResponse
    {
        return $this->post('save-test-results-file', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveTestResultsFileForSpecificResult(array $data = []): BuffaloResponse
    {
        return $this->post('save-test-results-file-for-specific-result', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveToIsolation(array $data = []): BuffaloResponse
    {
        return $this->post('save-to-isolation', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchAvailableIsolationsForUser(array $query = []): BuffaloResponse
    {
        return $this->get('search-available-isolations-for-user', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchIsolation(array $query = []): BuffaloResponse
    {
        return $this->get('search-isolation', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchMyIsolation(array $query = []): BuffaloResponse
    {
        return $this->get('search-my-isolation', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function setExtraTestDate(array $query = []): BuffaloResponse
    {
        return $this->get('set-extra-test-date', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function setNegativeResult(array $data = []): BuffaloResponse
    {
        return $this->post('set-negative-result', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function setPurposeOfTesting(array $query = []): BuffaloResponse
    {
        return $this->get('set-purpose-of-testing', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function signCittResults(array $data = []): BuffaloResponse
    {
        return $this->post('sign-citt-results', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function unlockIsolation(array $data = []): BuffaloResponse
    {
        return $this->post('unlock-isolation', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateAnimalOrder(array $data = []): BuffaloResponse
    {
        return $this->post('update-animal-order', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function updateCittExtraData(array $query = []): BuffaloResponse
    {
        return $this->get('update-citt-extra-data', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function updateExtraTestDates(array $query = []): BuffaloResponse
    {
        return $this->get('update-extra-test-dates', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateIsolation(array $data = []): BuffaloResponse
    {
        return $this->post('update-isolation', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateOwnerRef(array $data = []): BuffaloResponse
    {
        return $this->post('update-owner-ref', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function updateRoundRefs(array $query = []): BuffaloResponse
    {
        return $this->get('update-round-refs', $query);
    }
}
