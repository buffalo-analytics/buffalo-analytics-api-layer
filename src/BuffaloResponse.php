<?php

namespace Buffalo\Api;

use Illuminate\Http\Client\Response;

class BuffaloResponse
{
    public function __construct(protected Response $response) {}

    public function json(mixed $key = null, mixed $default = null): mixed
    {
        return $this->response->json($key, $default);
    }

    /**
     * @return array<string, mixed>
     */
    public function data(): array
    {
        $payload = $this->response->json();

        return is_array($payload) ? $payload : [];
    }

    public function successful(): bool
    {
        return $this->response->successful();
    }

    public function failed(): bool
    {
        return $this->response->failed();
    }

    public function status(): int
    {
        return $this->response->status();
    }

    public function body(): string
    {
        return $this->response->body();
    }

    public function throw(): static
    {
        $this->response->throw();

        return $this;
    }

    public function resource(): Response
    {
        return $this->response;
    }

    /**
     * @param  array<int, mixed>  $arguments
     */
    public function __call(string $name, array $arguments): mixed
    {
        return $this->response->{$name}(...$arguments);
    }
}
