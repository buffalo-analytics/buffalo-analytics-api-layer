<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class MovementsResource extends Resource
{
    protected function basePath(): string
    {
        return 'movements';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function addVehicle(array $data = []): BuffaloResponse
    {
        return $this->post('add-vehicle', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function approveMovement(array $query = []): BuffaloResponse
    {
        return $this->get('approve-movement', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createMovement(array $data = []): BuffaloResponse
    {
        return $this->post('create-movement', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function declineMovement(array $query = []): BuffaloResponse
    {
        return $this->get('decline-movement', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllMovements(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-movements', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalMovements(array $query = []): BuffaloResponse
    {
        return $this->get('get-animal-movements', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getApplicationCumulativeStats(array $query = []): BuffaloResponse
    {
        return $this->get('get-application-cumulative-stats', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getApplicationStats(array $query = []): BuffaloResponse
    {
        return $this->get('get-application-stats', $query);
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
    public function getMovementByRef(array $query = []): BuffaloResponse
    {
        return $this->get('get-movement-by-ref', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMovementStatuses(array $query = []): BuffaloResponse
    {
        return $this->get('get-movement-statuses', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getRemoveMovementFile(array $query = []): BuffaloResponse
    {
        return $this->get('remove-movement-file', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSaveAdditionalInfo(array $query = []): BuffaloResponse
    {
        return $this->get('save-additional-info', $query);
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
    public function getUpdateMovementStatus(array $query = []): BuffaloResponse
    {
        return $this->get('update-movement-status', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUserMovements(array $query = []): BuffaloResponse
    {
        return $this->get('get-user-movements', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function notifySendersState(array $query = []): BuffaloResponse
    {
        return $this->get('notify-senders-state', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function postSearchMovement(array $data = []): BuffaloResponse
    {
        return $this->post('search-movement', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function postSearchMyMovement(array $data = []): BuffaloResponse
    {
        return $this->post('search-my-movement', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function removeMovementFile(array $data = []): BuffaloResponse
    {
        return $this->post('remove-movement-file', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function removeVehicle(array $data = []): BuffaloResponse
    {
        return $this->post('remove-vehicle', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveAdditionalInfo(array $data = []): BuffaloResponse
    {
        return $this->post('save-additional-info', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveMovementAuthFile(array $data = []): BuffaloResponse
    {
        return $this->post('save-movement-auth-file', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveMovementGates(array $data = []): BuffaloResponse
    {
        return $this->post('save-movement-gates', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveRedcrossPermitsFile(array $data = []): BuffaloResponse
    {
        return $this->post('save-redcross-permits-file', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveTimeData(array $data = []): BuffaloResponse
    {
        return $this->post('save-time-data', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchMovement(array $query = []): BuffaloResponse
    {
        return $this->get('search-movement', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchMyMovement(array $query = []): BuffaloResponse
    {
        return $this->get('search-my-movement', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function sendRecommendationToMoveFile(array $data = []): BuffaloResponse
    {
        return $this->post('send-recommendation-to-move-file', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function showRecommendationToMove(array $query = []): BuffaloResponse
    {
        return $this->get('show-recommendation-to-move', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function signMovementAuthorization(array $data = []): BuffaloResponse
    {
        return $this->post('sign-movement-authorization', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateMovementStatus(array $data = []): BuffaloResponse
    {
        return $this->post('update-movement-status', $data);
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
    public function uploadMovementRecFile(array $data = []): BuffaloResponse
    {
        return $this->post('upload-movement-rec-file', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function verifiedMovementRecFile(array $query = []): BuffaloResponse
    {
        return $this->get('verified-movement-rec-file', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function verifyMovementAuthFile(array $query = []): BuffaloResponse
    {
        return $this->get('verify-movement-auth-file', $query);
    }
}
