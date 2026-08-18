<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class VacancyApplicationsResource extends Resource
{
    protected function basePath(): string
    {
        return 'vacancy-applications';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAttachmentsDownload(string|int $uuid, string|int $attachmentId, array $query = []): BuffaloResponse
    {
        return $this->get("{$uuid}/attachments/{$attachmentId}/download", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIndex(string|int $uuid, array $query = []): BuffaloResponse
    {
        return $this->get("{$uuid}", $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function update(string|int $uuid, array $data = []): BuffaloResponse
    {
        return $this->patch("{$uuid}", $data);
    }
}
