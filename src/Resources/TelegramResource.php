<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class TelegramResource extends Resource
{
    protected function basePath(): string
    {
        return 'telegram';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getTelegramQr(array $query = []): BuffaloResponse
    {
        return $this->get('get-telegram-qr', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function sendMessage(array $data = []): BuffaloResponse
    {
        return $this->post('send-message', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function webhook(array $data = []): BuffaloResponse
    {
        return $this->post('webhook', $data);
    }
}
