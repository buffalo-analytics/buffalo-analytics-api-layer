<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class VerificationPersonResource extends Resource
{
    protected function basePath(): string
    {
        return 'verification-person';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getIndex(string|int $email, string|int $token, array $query = []): BuffaloResponse
    {
        return $this->get("{$email}/{$token}", $query);
    }
}
