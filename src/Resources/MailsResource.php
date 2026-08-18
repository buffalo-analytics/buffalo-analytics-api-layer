<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class MailsResource extends Resource
{
    protected function basePath(): string
    {
        return 'mails';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function emailAccessLog(array $query = []): BuffaloResponse
    {
        return $this->get('email-access-log', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBunrApplicationMailFilters(array $query = []): BuffaloResponse
    {
        return $this->get('get-bunr-application-mail-filters', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBunrApplicationMails(array $query = []): BuffaloResponse
    {
        return $this->get('get-bunr-application-mails', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBunrApplicationMailsByFilters(array $query = []): BuffaloResponse
    {
        return $this->get('get-bunr-application-mails-by-filters', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMailFilters(array $query = []): BuffaloResponse
    {
        return $this->get('get-mail-filters', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMailsByFilters(array $query = []): BuffaloResponse
    {
        return $this->get('get-mails-by-filters', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMovementMailFilters(array $query = []): BuffaloResponse
    {
        return $this->get('get-movement-mail-filters', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMovementMails(array $query = []): BuffaloResponse
    {
        return $this->get('get-movement-mails', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMovementMailsByFilters(array $query = []): BuffaloResponse
    {
        return $this->get('get-movement-mails-by-filters', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function mailAccess(array $query = []): BuffaloResponse
    {
        return $this->get('mail-access', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchBunrApplicationMails(array $query = []): BuffaloResponse
    {
        return $this->get('search-bunr-application-mails', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchMailAccess(array $query = []): BuffaloResponse
    {
        return $this->get('search-mail-access', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchMovementMails(array $query = []): BuffaloResponse
    {
        return $this->get('search-movement-mails', $query);
    }
}
