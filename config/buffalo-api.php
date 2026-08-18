<?php

return [
    'base_url' => env(
        'BUFFALO_API_URL',
        rtrim((string) env('BACKEND_DOMAIN', 'http://buffalo-api.loc'), '/').'/api',
    ),

    'token' => env('BUFFALO_API_TOKEN'),

    'timeout' => (int) env('BUFFALO_API_TIMEOUT', 30),

    'retries' => (int) env('BUFFALO_API_RETRIES', 0),

    'retry_sleep' => (int) env('BUFFALO_API_RETRY_SLEEP', 100),

    'openapi' => env('BUFFALO_API_OPENAPI', '/var/www/buffalo-api'),
];
