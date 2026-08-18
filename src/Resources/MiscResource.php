<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class MiscResource extends Resource
{
    protected function basePath(): string
    {
        return '';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function agroEcologicalZones(array $query = []): BuffaloResponse
    {
        return $this->get('agro-ecological-zones', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function assignMovementAuthorizationLevels(array $data = []): BuffaloResponse
    {
        return $this->post('assign-movement-authorization-levels', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function assignZones(array $data = []): BuffaloResponse
    {
        return $this->post('assign-zones', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function checkBUNr(array $query = []): BuffaloResponse
    {
        return $this->get('checkBUNr', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function countries(array $query = []): BuffaloResponse
    {
        return $this->get('countries', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createMovementAuthLevel(array $data = []): BuffaloResponse
    {
        return $this->post('create-movement-auth-level', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteMovementAuthLevel(array $data = []): BuffaloResponse
    {
        return $this->post('delete-movement-auth-level', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteVaccineSubscriptions(array $data = []): BuffaloResponse
    {
        return $this->delete('vaccine-subscriptions', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function devices(array $query = []): BuffaloResponse
    {
        return $this->get('devices', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function diseaseOutbreaks(array $query = []): BuffaloResponse
    {
        return $this->get('disease-outbreaks', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function diseaseRiskModels(array $query = []): BuffaloResponse
    {
        return $this->get('disease-risk-models', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function firebaseOauth(array $data = []): BuffaloResponse
    {
        return $this->post('firebase-oauth', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function forgotPassword(array $data = []): BuffaloResponse
    {
        return $this->post('forgot-password', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBunrCountry(array $query = []): BuffaloResponse
    {
        return $this->get('get-bunr-country', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCsvParserTypes(array $query = []): BuffaloResponse
    {
        return $this->get('get-csv-parser-types', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMovementAuthorizationLevel(array $query = []): BuffaloResponse
    {
        return $this->get('get-movement-authorization-level', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMovementAuthorizations(array $query = []): BuffaloResponse
    {
        return $this->get('get-movement-authorizations', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonsByFarms(array $query = []): BuffaloResponse
    {
        return $this->get('get-persons-by-farms', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonsZones(array $query = []): BuffaloResponse
    {
        return $this->get('get-persons-zones', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getRequestedCalls(array $query = []): BuffaloResponse
    {
        return $this->get('get-requested-calls', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function getStateVets(array $data = []): BuffaloResponse
    {
        return $this->post('get-state-vets', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUserWithLevel(array $query = []): BuffaloResponse
    {
        return $this->get('get-user-with-level', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getVacancyApplications(array $query = []): BuffaloResponse
    {
        return $this->get('vacancy-applications', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getZonesForPerson(array $query = []): BuffaloResponse
    {
        return $this->get('get-zones-for-person', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getZonesTypes(array $query = []): BuffaloResponse
    {
        return $this->get('get-zones-types', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function google2fa(array $data = []): BuffaloResponse
    {
        return $this->post('google2fa', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function iccDevice(array $query = []): BuffaloResponse
    {
        return $this->get('icc-device', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function jobApplications(array $data = []): BuffaloResponse
    {
        return $this->post('job-applications', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function medicinePackages(array $query = []): BuffaloResponse
    {
        return $this->get('medicine-packages', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function monthlystatereport(array $query = []): BuffaloResponse
    {
        return $this->get('monthlystatereport', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function movementAuthorizationLevels(array $query = []): BuffaloResponse
    {
        return $this->get('movement-authorization-levels', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function movementAuthorizationZones(array $query = []): BuffaloResponse
    {
        return $this->get('movement-authorization-zones', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function outbreaks(array $query = []): BuffaloResponse
    {
        return $this->get('outbreaks', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function ping(array $query = []): BuffaloResponse
    {
        return $this->get('ping', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function postDevices(array $data = []): BuffaloResponse
    {
        return $this->post('devices', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function postIccDevice(array $data = []): BuffaloResponse
    {
        return $this->post('icc-device', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function postMedicinePackages(array $data = []): BuffaloResponse
    {
        return $this->post('medicine-packages', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function postVaccineRequests(array $data = []): BuffaloResponse
    {
        return $this->post('vaccine-requests', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function postVaccineSubscriptions(array $data = []): BuffaloResponse
    {
        return $this->post('vaccine-subscriptions', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function products(array $query = []): BuffaloResponse
    {
        return $this->get('products', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function provinces(array $query = []): BuffaloResponse
    {
        return $this->get('provinces', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function removePersonZones(array $data = []): BuffaloResponse
    {
        return $this->post('remove-person-zones', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function resetPassword(array $data = []): BuffaloResponse
    {
        return $this->post('reset-password', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function scannerDevices(array $query = []): BuffaloResponse
    {
        return $this->get('scanner-devices', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchCountries(array $query = []): BuffaloResponse
    {
        return $this->get('search-countries', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function sendIsolationEmails(array $data = []): BuffaloResponse
    {
        return $this->post('send-isolation-emails', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function sendUsMessage(array $data = []): BuffaloResponse
    {
        return $this->post('send-us-message', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function shapesAbattoirsZones(array $query = []): BuffaloResponse
    {
        return $this->get('shapes-abattoirs-zones', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function shapesAdminsZones(array $query = []): BuffaloResponse
    {
        return $this->get('shapes-admins-zones', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function shapesFmdZones(array $query = []): BuffaloResponse
    {
        return $this->get('shapes-fmd-zones', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function signMovementAuthorization(array $data = []): BuffaloResponse
    {
        return $this->post('sign-movement-authorization', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function testScanner(array $query = []): BuffaloResponse
    {
        return $this->get('test-scanner', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updatePersonsChain(array $data = []): BuffaloResponse
    {
        return $this->post('update-persons-chain', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateRequestedCallStatus(array $data = []): BuffaloResponse
    {
        return $this->post('update-requested-call-status', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function updateSignature(array $query = []): BuffaloResponse
    {
        return $this->get('update-signature', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateUserLevel(array $data = []): BuffaloResponse
    {
        return $this->post('update-user-level', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function userMovementAuthorizationZones(array $query = []): BuffaloResponse
    {
        return $this->get('user-movement-authorization-zones', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function users(array $query = []): BuffaloResponse
    {
        return $this->get('users', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function vacancyApplications(array $data = []): BuffaloResponse
    {
        return $this->post('vacancy-applications', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function vaccineRequests(array $query = []): BuffaloResponse
    {
        return $this->get('vaccine-requests', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function vaccineSubscriptions(array $query = []): BuffaloResponse
    {
        return $this->get('vaccine-subscriptions', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function vaccineTracking(array $query = []): BuffaloResponse
    {
        return $this->get('vaccine-tracking', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function vetContact(array $data = []): BuffaloResponse
    {
        return $this->post('vet-contact', $data);
    }
}
