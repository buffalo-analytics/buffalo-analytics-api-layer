<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class DevicesResource extends Resource
{
    protected function basePath(): string
    {
        return 'devices';
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
    public function destroy(string|int $device, array $data = []): BuffaloResponse
    {
        return $this->delete("{$device}", $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function devicePersons(array $query = []): BuffaloResponse
    {
        return $this->get('device-persons', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function devicesList(array $query = []): BuffaloResponse
    {
        return $this->get('devices-list', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function generateGetrequestResponse(array $query = []): BuffaloResponse
    {
        return $this->get('generate-getrequest-response', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getConfigure(string|int $device, array $query = []): BuffaloResponse
    {
        return $this->get("{$device}/configure", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getDevicePins(array $query = []): BuffaloResponse
    {
        return $this->get('get-device-pins', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getDevicesConfigure(string|int $device, array $query = []): BuffaloResponse
    {
        return $this->get("devices/{$device}/configure", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIndex(string|int $device, array $query = []): BuffaloResponse
    {
        return $this->get("{$device}", $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function linkPerson(array $data = []): BuffaloResponse
    {
        return $this->post('link-person', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchSettings(string|int $device, array $data = []): BuffaloResponse
    {
        return $this->patch("{$device}/settings", $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function personDevices(array $query = []): BuffaloResponse
    {
        return $this->get('person-devices', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function persons(array $query = []): BuffaloResponse
    {
        return $this->get('persons', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function pins(array $query = []): BuffaloResponse
    {
        return $this->get('pins', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function postUpdate(string|int $device, array $data = []): BuffaloResponse
    {
        return $this->post("{$device}/update", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function settings(string|int $device, array $data = []): BuffaloResponse
    {
        return $this->post("{$device}/settings", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function settingsCreate(string|int $device, array $data = []): BuffaloResponse
    {
        return $this->post("{$device}/settings/create", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function update(string|int $id, array $data = []): BuffaloResponse
    {
        return $this->patch("{$id}", $data);
    }
}
