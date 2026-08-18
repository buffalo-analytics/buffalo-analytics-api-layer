<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class MedicinePackagesResource extends Resource
{
    protected function basePath(): string
    {
        return 'medicine-packages';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function askForPermission(array $data = []): BuffaloResponse
    {
        return $this->post('ask-for-permission', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function assignBoxToDepo(array $data = []): BuffaloResponse
    {
        return $this->post('assign-box-to-depo', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function assignUserToScanHistory(array $data = []): BuffaloResponse
    {
        return $this->post('assign-user-to-scan-history', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function availableUuids(array $query = []): BuffaloResponse
    {
        return $this->get('available-uuids', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function bulkCreateBox(array $data = []): BuffaloResponse
    {
        return $this->post('bulk-create-box', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createGovOrder(array $data = []): BuffaloResponse
    {
        return $this->post('create-gov-order', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function destroy(string|int $id, array $data = []): BuffaloResponse
    {
        return $this->delete("{$id}", $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getArchive(string|int $id, array $query = []): BuffaloResponse
    {
        return $this->get("{$id}/archive", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getGetPackageParent(string|int $uuid, array $query = []): BuffaloResponse
    {
        return $this->get("get-package-parent/{$uuid}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getGovOrder(array $query = []): BuffaloResponse
    {
        return $this->get('get-gov-order', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIndex(string|int $id, array $query = []): BuffaloResponse
    {
        return $this->get("{$id}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUuid(string|int $uuid, array $query = []): BuffaloResponse
    {
        return $this->get("uuid/{$uuid}", $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function packBottles(array $data = []): BuffaloResponse
    {
        return $this->post('pack-bottles', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function packagesStatuses(array $query = []): BuffaloResponse
    {
        return $this->get('packages-statuses', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function repackBottle(array $data = []): BuffaloResponse
    {
        return $this->post('repack-bottle', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function scanQrCode(array $query = []): BuffaloResponse
    {
        return $this->get('scan-qr-code', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function scanQrCodeHistory(array $query = []): BuffaloResponse
    {
        return $this->get('scan-qr-code-history', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function sealPackage(array $query = []): BuffaloResponse
    {
        return $this->get('seal-package', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function update(string|int $uuid, array $data = []): BuffaloResponse
    {
        return $this->put("{$uuid}", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateGovOrder(array $data = []): BuffaloResponse
    {
        return $this->post('update-gov-order', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function uploadTemperatureFile(array $data = []): BuffaloResponse
    {
        return $this->post('upload-temperature-file', $data);
    }
}
