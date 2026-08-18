<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class SubscriptionsResource extends Resource
{
    protected function basePath(): string
    {
        return 'subscriptions';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createSubscription(array $data = []): BuffaloResponse
    {
        return $this->post('create-subscription', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function editSubscription(array $data = []): BuffaloResponse
    {
        return $this->post('edit-subscription', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllItems(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-items', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAvailableSubscriptionItems(array $query = []): BuffaloResponse
    {
        return $this->get('get-available-subscription-items', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCreateSubscription(array $query = []): BuffaloResponse
    {
        return $this->get('create-subscription', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getEditSubscription(array $query = []): BuffaloResponse
    {
        return $this->get('edit-subscription', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getItemsById(array $query = []): BuffaloResponse
    {
        return $this->get('get-items-by-id', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPeriods(array $query = []): BuffaloResponse
    {
        return $this->get('get-periods', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonSubscriptionOrders(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-subscription-orders', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonSubscriptions(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-subscriptions', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSpecificSubscriptionItems(array $query = []): BuffaloResponse
    {
        return $this->get('get-specific-subscription-items', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSubscriptions(array $query = []): BuffaloResponse
    {
        return $this->get('get-subscriptions', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSubscriptionsForPerson(array $query = []): BuffaloResponse
    {
        return $this->get('get-subscriptions-for-person', $query);
    }
}
