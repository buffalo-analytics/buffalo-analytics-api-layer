<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class PaymentsResource extends Resource
{
    protected function basePath(): string
    {
        return 'payments';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function cancel(array $query = []): BuffaloResponse
    {
        return $this->get('cancel', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function cancelSubscription(array $data = []): BuffaloResponse
    {
        return $this->post('cancel-subscription', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function ipn(array $data = []): BuffaloResponse
    {
        return $this->post('ipn', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function payCart(array $data = []): BuffaloResponse
    {
        return $this->post('pay-cart', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function payOnce(array $data = []): BuffaloResponse
    {
        return $this->post('pay-once', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function subscribe(array $data = []): BuffaloResponse
    {
        return $this->post('subscribe', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function subscribeByMembers(array $data = []): BuffaloResponse
    {
        return $this->post('subscribe-by-members', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function success(array $query = []): BuffaloResponse
    {
        return $this->get('success', $query);
    }
}
