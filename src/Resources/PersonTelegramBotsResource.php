<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class PersonTelegramBotsResource extends Resource
{
    protected function basePath(): string
    {
        return 'person-telegram-bots';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function addCommands(array $data = []): BuffaloResponse
    {
        return $this->post('add-commands', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function addCommandsToBot(array $data = []): BuffaloResponse
    {
        return $this->post('add-commands-to-bot', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function create(array $data = []): BuffaloResponse
    {
        return $this->post('create', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function createTelegramBot(array $query = []): BuffaloResponse
    {
        return $this->get('create-telegram-bot', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDeleteUser(array $data = []): BuffaloResponse
    {
        return $this->delete('delete-user', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteUserFromBot(array $data = []): BuffaloResponse
    {
        return $this->post('delete-user-from-bot', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBotCommandsList(array $query = []): BuffaloResponse
    {
        return $this->get('get-bot-commands-list', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBotUsers(array $query = []): BuffaloResponse
    {
        return $this->get('get-bot-users', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCommandsList(array $query = []): BuffaloResponse
    {
        return $this->get('get-commands-list', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonTelegramQr(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-telegram-qr', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getQr(array $query = []): BuffaloResponse
    {
        return $this->get('get-qr', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUsers(array $query = []): BuffaloResponse
    {
        return $this->get('get-users', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function webhook(array $data = []): BuffaloResponse
    {
        return $this->post('webhook', $data);
    }
}
