<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class CommunicationsResource extends Resource
{
    protected function basePath(): string
    {
        return 'communications';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function checkForNotification(array $query = []): BuffaloResponse
    {
        return $this->get('check-for-notification', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function createChat(array $query = []): BuffaloResponse
    {
        return $this->get('create-chat', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getTelegramChatMessages(array $query = []): BuffaloResponse
    {
        return $this->get('get-telegram-chat-messages', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getTelegramUsers(array $query = []): BuffaloResponse
    {
        return $this->get('get-telegram-users', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUserChats(array $query = []): BuffaloResponse
    {
        return $this->get('get-user-chats', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function updateChatStatus(array $query = []): BuffaloResponse
    {
        return $this->get('update-chat-status', $query);
    }
}
