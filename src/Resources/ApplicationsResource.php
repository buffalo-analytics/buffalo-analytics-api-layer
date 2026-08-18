<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class ApplicationsResource extends Resource
{
    protected function basePath(): string
    {
        return 'applications';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function changeApplicationAuthorizationChain(array $data = []): BuffaloResponse
    {
        return $this->post('change-application-authorization-chain', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createBunrApplication(array $data = []): BuffaloResponse
    {
        return $this->post('create-bunr-application', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteBunrApplication(array $data = []): BuffaloResponse
    {
        return $this->post('delete-bunr-application', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteWarthogPermit(array $data = []): BuffaloResponse
    {
        return $this->post('delete-warthog-permit', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllApplicationHeaders(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-application-headers', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllApplications(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-applications', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllUserApplications(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-user-applications', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAuthorizationPersons(array $query = []): BuffaloResponse
    {
        return $this->get('get-authorization-persons', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAvailableAuthChainPerson(array $query = []): BuffaloResponse
    {
        return $this->get('get-available-auth-chain-person', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAvailableAuthChainPersons(array $query = []): BuffaloResponse
    {
        return $this->get('get-available-auth-chain-persons', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBunrApplicationAuthorizationPersons(array $query = []): BuffaloResponse
    {
        return $this->get('get-bunr-application-authorization-persons', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBunrApplicationByFarmUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-bunr-application-by-farm-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getChangeApplicationAuthorizationChain(array $query = []): BuffaloResponse
    {
        return $this->get('change-application-authorization-chain', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getNotifyStateByApplicationUuid(array $query = []): BuffaloResponse
    {
        return $this->get('notify-state-by-application-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getWithdrawApplication(array $query = []): BuffaloResponse
    {
        return $this->get('withdraw-application', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function notifyStateByApplicationUuid(array $data = []): BuffaloResponse
    {
        return $this->post('notify-state-by-application-uuid', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function removeBunrApplicationReport(array $data = []): BuffaloResponse
    {
        return $this->post('remove-bunr-application-report', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function signBunrApplicationByAuth(array $data = []): BuffaloResponse
    {
        return $this->post('sign-bunr-application-by-auth', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function submitBunrApplicationByBuffaloVet(array $data = []): BuffaloResponse
    {
        return $this->post('submit-bunr-application-by-buffalo-vet', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function submitBunrApplicationReport(array $data = []): BuffaloResponse
    {
        return $this->post('submit-bunr-application-report', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function submitNewBunrApplicationFiles(array $data = []): BuffaloResponse
    {
        return $this->post('submit-new-bunr-application-files', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function withdrawApplication(array $data = []): BuffaloResponse
    {
        return $this->post('withdraw-application', $data);
    }
}
