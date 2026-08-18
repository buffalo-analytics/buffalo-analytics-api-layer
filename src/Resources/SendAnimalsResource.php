<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class SendAnimalsResource extends Resource
{
    protected function basePath(): string
    {
        return 'send-animals';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function checkAnimals(array $data = []): BuffaloResponse
    {
        return $this->post('check-animals', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function confirmSendAnimals(array $query = []): BuffaloResponse
    {
        return $this->get('confirm-send-animals', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createSendAnimals(array $data = []): BuffaloResponse
    {
        return $this->post('create-send-animals', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllSendAnimals(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-send-animals', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFarmMovementsReport(array $query = []): BuffaloResponse
    {
        return $this->get('get-farm-movements-report', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getGenerateReport(string|int $bunrUuid, array $query = []): BuffaloResponse
    {
        return $this->get("generate-report/{$bunrUuid}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSendAnimalsByPerson(array $query = []): BuffaloResponse
    {
        return $this->get('get-send-animals-by-person', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSendAnimalsByUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-send-animals-by-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function saveNewRecipient(array $query = []): BuffaloResponse
    {
        return $this->get('save-new-recipient', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchSendAnimals(array $query = []): BuffaloResponse
    {
        return $this->get('search-send-animals', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateSendAnimals(array $data = []): BuffaloResponse
    {
        return $this->post('update-send-animals', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateSendAnimalsDriver(array $data = []): BuffaloResponse
    {
        return $this->post('update-send-animals-driver', $data);
    }
}
