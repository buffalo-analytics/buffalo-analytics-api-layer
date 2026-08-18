<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class AdminVaccineConsignmentsResource extends Resource
{
    protected function basePath(): string
    {
        return 'admin/vaccine-consignments';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function applyTemplate(string|int $consignmentId, array $data = []): BuffaloResponse
    {
        return $this->post("{$consignmentId}/apply-template", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteSteps(string|int $stepId, array $data = []): BuffaloResponse
    {
        return $this->delete("steps/{$stepId}", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteUpdates(string|int $updateId, array $data = []): BuffaloResponse
    {
        return $this->delete("updates/{$updateId}", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function destroy(string|int $id, array $data = []): BuffaloResponse
    {
        return $this->delete("{$id}", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function featured(string|int $id, array $data = []): BuffaloResponse
    {
        return $this->post("{$id}/featured", $data);
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
    public function index(array $query = []): BuffaloResponse
    {
        return $this->get('', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function publish(string|int $id, array $data = []): BuffaloResponse
    {
        return $this->post("{$id}/publish", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function putSteps(string|int $stepId, array $data = []): BuffaloResponse
    {
        return $this->put("steps/{$stepId}", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function putUpdates(string|int $updateId, array $data = []): BuffaloResponse
    {
        return $this->put("updates/{$updateId}", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function resyncTemplate(string|int $consignmentId, array $data = []): BuffaloResponse
    {
        return $this->post("{$consignmentId}/resync-template", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function steps(string|int $consignmentId, array $data = []): BuffaloResponse
    {
        return $this->post("{$consignmentId}/steps", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function stepsComplete(string|int $stepId, array $data = []): BuffaloResponse
    {
        return $this->post("steps/{$stepId}/complete", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function stepsStart(string|int $stepId, array $data = []): BuffaloResponse
    {
        return $this->post("steps/{$stepId}/start", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function stepsUpdates(string|int $stepId, array $data = []): BuffaloResponse
    {
        return $this->post("steps/{$stepId}/updates", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function store(array $data = []): BuffaloResponse
    {
        return $this->post('', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function templates(array $query = []): BuffaloResponse
    {
        return $this->get('templates', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function unpublish(string|int $id, array $data = []): BuffaloResponse
    {
        return $this->post("{$id}/unpublish", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function update(string|int $id, array $data = []): BuffaloResponse
    {
        return $this->put("{$id}", $data);
    }
}
