<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class PersonsResource extends Resource
{
    protected function basePath(): string
    {
        return 'persons';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function addPassportInfo(array $data = []): BuffaloResponse
    {
        return $this->post('add-passport-info', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function addUsersToPerson(array $data = []): BuffaloResponse
    {
        return $this->post('add-users-to-person', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function allowAppForPermit(array $data = []): BuffaloResponse
    {
        return $this->post('allow-app-for-permit', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function apiUsersList(array $query = []): BuffaloResponse
    {
        return $this->get('api-users-list', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function approvePersonDocument(array $data = []): BuffaloResponse
    {
        return $this->post('approve-person-document', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function byCoords(array $query = []): BuffaloResponse
    {
        return $this->get('by-coords', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function checkPerson(array $query = []): BuffaloResponse
    {
        return $this->get('check-person', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function checkPersonIdentifier(array $data = []): BuffaloResponse
    {
        return $this->post('check-person-identifier', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function checkPersonRef(array $data = []): BuffaloResponse
    {
        return $this->post('check-person-ref', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function checkWarthogPermitSigned(array $query = []): BuffaloResponse
    {
        return $this->get('check-warthog-permit-signed', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function companiesAndNaturalPersons(array $query = []): BuffaloResponse
    {
        return $this->get('companies-and-natural-persons', $query);
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
    public function createPerson(array $data = []): BuffaloResponse
    {
        return $this->post('create-person', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createVehicle(array $data = []): BuffaloResponse
    {
        return $this->post('create-vehicle', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function decodeBarcode(array $data = []): BuffaloResponse
    {
        return $this->post('decode-barcode', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDeleteDriver(array $data = []): BuffaloResponse
    {
        return $this->delete('delete-driver', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDeleteUsersFromPerson(array $data = []): BuffaloResponse
    {
        return $this->delete('delete-users-from-person', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDeleteVehicle(array $data = []): BuffaloResponse
    {
        return $this->delete('delete-vehicle', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deletePerson(array $data = []): BuffaloResponse
    {
        return $this->post('delete-person', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function denyAppForPermit(array $query = []): BuffaloResponse
    {
        return $this->get('deny-app-for-permit', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function generateUserAgreement(string|int $fileName, array $data = []): BuffaloResponse
    {
        return $this->post("generate-user-agreement/{$fileName}", $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllBuwrCertificateRequests(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-buwr-certificate-requests', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllIssuedPermitsByAuthCode(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-issued-permits-by-auth-code', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllLabs(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-labs', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllNaturalPersons(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-natural-persons', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getApiUsers(array $query = []): BuffaloResponse
    {
        return $this->get('get-api-users', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getApplicationsForPermits(array $query = []): BuffaloResponse
    {
        return $this->get('get-applications-for-permits', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAuthChainPersonsByLevels(array $query = []): BuffaloResponse
    {
        return $this->get('get-auth-chain-persons-by-levels', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAuthChainPersonsByTemplateId(array $query = []): BuffaloResponse
    {
        return $this->get('get-auth-chain-persons-by-template-id', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAvailableMemberUserPersons(array $query = []): BuffaloResponse
    {
        return $this->get('get-available-member-user-persons', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCertificateEmails(array $query = []): BuffaloResponse
    {
        return $this->get('get-certificate-emails', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCheckPersonIdentifier(array $query = []): BuffaloResponse
    {
        return $this->get('check-person-identifier', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCheckPersonRef(array $query = []): BuffaloResponse
    {
        return $this->get('check-person-ref', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCittTesterPersons(array $query = []): BuffaloResponse
    {
        return $this->get('get-citt-tester-persons', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getClients(array $query = []): BuffaloResponse
    {
        return $this->get('get-clients', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCreateVehicle(array $query = []): BuffaloResponse
    {
        return $this->get('create-vehicle', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getDepoOrders(array $query = []): BuffaloResponse
    {
        return $this->get('get-depo-orders', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getDocumentById(array $query = []): BuffaloResponse
    {
        return $this->get('get-document-by-id', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getDocumentsForValidation(array $query = []): BuffaloResponse
    {
        return $this->get('get-documents-for-validation', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getDriver(array $query = []): BuffaloResponse
    {
        return $this->get('get-driver', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getGeneratePersonFile(string|int $fileName, array $query = []): BuffaloResponse
    {
        return $this->get("generate-person-file/{$fileName}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getHuntingLicenseTypes(array $query = []): BuffaloResponse
    {
        return $this->get('get-hunting-license-types', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getInviteMessageForMessengers(array $query = []): BuffaloResponse
    {
        return $this->get('get-invite-message-for-messengers', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIssuerPersons(array $query = []): BuffaloResponse
    {
        return $this->get('get-issuer-persons', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getLabMethods(array $query = []): BuffaloResponse
    {
        return $this->get('get-lab-methods', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMonthlyPersonStats(array $query = []): BuffaloResponse
    {
        return $this->get('get-monthly-person-stats', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getNaturalPersons(array $query = []): BuffaloResponse
    {
        return $this->get('get-natural-persons', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getNaturalPersonsList(array $query = []): BuffaloResponse
    {
        return $this->get('get-natural-persons-list', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getOutfitters(array $query = []): BuffaloResponse
    {
        return $this->get('get-outfitters', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPerson(array $query = []): BuffaloResponse
    {
        return $this->get('get-person', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonAgreement(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-agreement', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonByPersonEmail(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-by-person-email', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonByUserUd(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-by-user-ud', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonByUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-by-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonDocumentTypes(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-document-types', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonDocuments(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-documents', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonEntityTypes(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-entity-types', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonFilesByBunr(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-files-by-bunr', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonIdentifier(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-identifier', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonPermissions(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-permissions', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonPermits(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-permits', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonTitles(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-titles', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonUserExistsRolePermissions(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-user-exists-role-permissions', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonUserRolePermissions(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-user-role-permissions', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonUsers(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-users', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonVehicles(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-vehicles', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonWarthogPermits(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-warthog-permits', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersons(array $query = []): BuffaloResponse
    {
        return $this->get('get-persons', $query);
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
    public function getPersonsWithDrivers(array $query = []): BuffaloResponse
    {
        return $this->get('get-persons-with-drivers', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getProfessionalHunters(array $query = []): BuffaloResponse
    {
        return $this->get('get-professional-hunters', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getRequestByUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-request-by-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getResponsiblePerson(array $query = []): BuffaloResponse
    {
        return $this->get('get-responsible-person', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getStateVetsByBunrPin(array $query = []): BuffaloResponse
    {
        return $this->get('get-state-vets-by-bunr-pin', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getTaxidermists(array $query = []): BuffaloResponse
    {
        return $this->get('get-taxidermists', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUserLabs(array $query = []): BuffaloResponse
    {
        return $this->get('get-user-labs', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUserPersons(array $query = []): BuffaloResponse
    {
        return $this->get('get-user-persons', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUserPersonsWithMembers(array $query = []): BuffaloResponse
    {
        return $this->get('get-user-persons-with-members', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUserPersonsWithSpecificPermission(array $query = []): BuffaloResponse
    {
        return $this->get('get-user-persons-with-specific-permission', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getValidationServiceProviders(array $query = []): BuffaloResponse
    {
        return $this->get('get-validation-service-providers', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getVehicles(array $query = []): BuffaloResponse
    {
        return $this->get('get-vehicles', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getVehiclesWherePersonDriver(array $query = []): BuffaloResponse
    {
        return $this->get('get-vehicles-where-person-driver', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getVeterinarians(array $query = []): BuffaloResponse
    {
        return $this->get('get-veterinarians', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getVeterinaryRegistrationValidators(array $query = []): BuffaloResponse
    {
        return $this->get('get-veterinary-registration-validators', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getWarthogPermitIssuerPersons(array $query = []): BuffaloResponse
    {
        return $this->get('get-warthog-permit-issuer-persons', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function isUserInPersonTeam(array $query = []): BuffaloResponse
    {
        return $this->get('is-user-in-person-team', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function isUserJustAMember(array $query = []): BuffaloResponse
    {
        return $this->get('is-user-just-a-member', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function issueWarthogPermit(array $data = []): BuffaloResponse
    {
        return $this->post('issue-warthog-permit', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function notifyClientOfCertificateUpload(array $query = []): BuffaloResponse
    {
        return $this->get('notify-client-of-certificate-upload', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function notifyStateByCertificateRequestUuid(array $query = []): BuffaloResponse
    {
        return $this->get('notify-state-by-certificate-request-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function personsMovementAuthLevels(array $query = []): BuffaloResponse
    {
        return $this->get('persons-movement-auth-levels', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function postCheckPerson(array $data = []): BuffaloResponse
    {
        return $this->post('check-person', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function rejectPersonDocument(array $data = []): BuffaloResponse
    {
        return $this->post('reject-person-document', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function removePersonDocument(array $data = []): BuffaloResponse
    {
        return $this->post('remove-person-document', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function removeResponsiblePerson(array $data = []): BuffaloResponse
    {
        return $this->post('remove-responsible-person', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function requestAccess(array $data = []): BuffaloResponse
    {
        return $this->post('request-access', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function requestBuwrCertificate(array $data = []): BuffaloResponse
    {
        return $this->post('request-buwr-certificate', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveCertificateFile(array $data = []): BuffaloResponse
    {
        return $this->post('save-certificate-file', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function savePersonFile(array $data = []): BuffaloResponse
    {
        return $this->post('save-person-file', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function savePersonPermissions(array $data = []): BuffaloResponse
    {
        return $this->post('save-person-permissions', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchCompaniesAndNaturalPersons(array $query = []): BuffaloResponse
    {
        return $this->get('search-companies-and-natural-persons', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchPerson(array $query = []): BuffaloResponse
    {
        return $this->get('search-person', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchPersonsById(array $query = []): BuffaloResponse
    {
        return $this->get('search-persons-by-id', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function sendInviteToPerson(array $query = []): BuffaloResponse
    {
        return $this->get('send-invite-to-person', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function setDriver(array $query = []): BuffaloResponse
    {
        return $this->get('set-driver', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function setResponsiblePerson(array $data = []): BuffaloResponse
    {
        return $this->post('set-responsible-person', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function showWarthogMeatApplicationFile(array $query = []): BuffaloResponse
    {
        return $this->get('show-warthog-meat-application-file', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function showWarthogPermitFile(array $query = []): BuffaloResponse
    {
        return $this->get('show-warthog-permit-file', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function signBuwrCertificateAuthorization(array $data = []): BuffaloResponse
    {
        return $this->post('sign-buwr-certificate-authorization', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function signWarthogPermit(array $query = []): BuffaloResponse
    {
        return $this->get('sign-warthog-permit', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function submitPermit(array $data = []): BuffaloResponse
    {
        return $this->post('submit-permit', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updatePersonAddress(array $data = []): BuffaloResponse
    {
        return $this->post('update-person-address', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updatePersonIdentifier(array $data = []): BuffaloResponse
    {
        return $this->post('update-person-identifier', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updatePersonInfo(array $data = []): BuffaloResponse
    {
        return $this->post('update-person-info', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updatePersonLogo(array $data = []): BuffaloResponse
    {
        return $this->post('update-person-logo', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function updateVehicle(array $query = []): BuffaloResponse
    {
        return $this->get('update-vehicle', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function uploadPersonDocument(array $data = []): BuffaloResponse
    {
        return $this->post('upload-person-document', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function verifEmail(array $query = []): BuffaloResponse
    {
        return $this->get('verif-email', $query);
    }
}
