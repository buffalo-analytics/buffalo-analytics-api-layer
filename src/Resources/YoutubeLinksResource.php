<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class YoutubeLinksResource extends Resource
{
    protected function basePath(): string
    {
        return 'youtube-links';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function createYoutubeLink(array $query = []): BuffaloResponse
    {
        return $this->get('create-youtube-link', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDeleteLink(array $data = []): BuffaloResponse
    {
        return $this->delete('delete-link', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function editLink(array $query = []): BuffaloResponse
    {
        return $this->get('edit-link', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllYoutubeLinks(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-youtube-links', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchLink(array $query = []): BuffaloResponse
    {
        return $this->get('search-link', $query);
    }
}
