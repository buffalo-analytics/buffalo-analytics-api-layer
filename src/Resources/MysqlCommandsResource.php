<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class MysqlCommandsResource extends Resource
{
    protected function basePath(): string
    {
        return 'mysql-commands';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllCommands(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-commands', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCommandData(array $query = []): BuffaloResponse
    {
        return $this->get('get-command-data', $query);
    }
}
