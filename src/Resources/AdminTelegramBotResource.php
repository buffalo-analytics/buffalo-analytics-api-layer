<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class AdminTelegramBotResource extends Resource
{
    protected function basePath(): string
    {
        return 'admin/telegram-bot';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function diseaseReportsMap(array $query = []): BuffaloResponse
    {
        return $this->get('disease-reports-map', $query);
    }
}
