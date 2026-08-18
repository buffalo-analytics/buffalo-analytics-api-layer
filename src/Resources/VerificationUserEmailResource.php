<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class VerificationUserEmailResource extends Resource
{
    protected function basePath(): string
    {
        return 'verification-user-email';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIndex(string|int $email, string|int $token, array $query = []): BuffaloResponse
    {
        return $this->get("{$email}/{$token}", $query);
    }
}
