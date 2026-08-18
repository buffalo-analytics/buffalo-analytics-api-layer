<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class RcpResource extends Resource
{
    protected function basePath(): string
    {
        return 'rcp';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function confirm(array $data = []): BuffaloResponse
    {
        return $this->post('confirm', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function confirmRcp(array $data = []): BuffaloResponse
    {
        return $this->post('confirm-rcp', $data);
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
    public function createRcp(array $data = []): BuffaloResponse
    {
        return $this->post('create-rcp', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteRemoveFile(array $data = []): BuffaloResponse
    {
        return $this->delete('remove-file', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function editRcpDriver(array $query = []): BuffaloResponse
    {
        return $this->get('edit-rcp-driver', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function editRcpVehiclesList(array $data = []): BuffaloResponse
    {
        return $this->post('edit-rcp-vehicles-list', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function generateFile(array $data = []): BuffaloResponse
    {
        return $this->post('generate-file', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function generateRcpFile(array $query = []): BuffaloResponse
    {
        return $this->get('generate-rcp-file', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAll(array $query = []): BuffaloResponse
    {
        return $this->get('get-all', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllRcps(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-rcps', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getByUid(array $query = []): BuffaloResponse
    {
        return $this->get('get-by-uid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getRcpByUid(array $query = []): BuffaloResponse
    {
        return $this->get('get-rcp-by-uid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getShowDocument(string|int $ref, array $query = []): BuffaloResponse
    {
        return $this->get("show-document/{$ref}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUserRcps(array $query = []): BuffaloResponse
    {
        return $this->get('get-user-rcps', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchEditDriver(array $data = []): BuffaloResponse
    {
        return $this->patch('edit-driver', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchEditVehiclesList(array $data = []): BuffaloResponse
    {
        return $this->patch('edit-vehicles-list', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchSetSealStatus(array $data = []): BuffaloResponse
    {
        return $this->patch('set-seal-status', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchUpdateFile(array $data = []): BuffaloResponse
    {
        return $this->patch('update-file', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function removeRcpFile(array $query = []): BuffaloResponse
    {
        return $this->get('remove-rcp-file', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveArrival(array $data = []): BuffaloResponse
    {
        return $this->post('save-arrival', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveDeparture(array $data = []): BuffaloResponse
    {
        return $this->post('save-departure', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveDriver(array $data = []): BuffaloResponse
    {
        return $this->post('save-driver', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function saveRcpArrival(array $query = []): BuffaloResponse
    {
        return $this->get('save-rcp-arrival', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveRcpDeparture(array $data = []): BuffaloResponse
    {
        return $this->post('save-rcp-departure', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function saveRcpDriver(array $query = []): BuffaloResponse
    {
        return $this->get('save-rcp-driver', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveRcpVehicles(array $data = []): BuffaloResponse
    {
        return $this->post('save-rcp-vehicles', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveVehicle(array $data = []): BuffaloResponse
    {
        return $this->post('save-vehicle', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchUserRcps(array $query = []): BuffaloResponse
    {
        return $this->get('search-user-rcps', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function setSealStatus(array $query = []): BuffaloResponse
    {
        return $this->get('set-seal-status', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function sign(array $data = []): BuffaloResponse
    {
        return $this->post('sign', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function signRcp(array $data = []): BuffaloResponse
    {
        return $this->post('sign-rcp', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function updateRcpFile(array $query = []): BuffaloResponse
    {
        return $this->get('update-rcp-file', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function uploadFile(array $data = []): BuffaloResponse
    {
        return $this->post('upload-file', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function uploadRcpFile(array $data = []): BuffaloResponse
    {
        return $this->post('upload-rcp-file', $data);
    }
}
