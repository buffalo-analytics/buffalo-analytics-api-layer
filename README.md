# buffalo/api

HTTP client for [buffalo-api](http://buffalo-api.loc). This package does not copy models, controllers, or migrations from the API. A consuming app talks to a running buffalo-api instance over HTTP.

Requires PHP 8.2+ and `illuminate/http` ^11 / ^12 / ^13. Laravel 11–13 apps get auto-discovery; plain PHP apps instantiate `Client` directly.

## Install in a Laravel project

The package is not on Packagist. Add it with a Composer `path` repository (local copy) or a `vcs` repository (git).

### Path repository

Copy `packages/buffalo/api` into the other project (or point at an absolute path) and add this to that project's `composer.json`:

```json
{
    "require": {
        "php": "^8.2",
        "buffalo/api": "^1.0",
        "laravel/framework": "^11.0 || ^12.0 || ^13.0"
    },
    "repositories": [
        {
            "type": "path",
            "url": "packages/buffalo/api",
            "options": {
                "symlink": true
            }
        }
    ]
}
```

If the package lives outside the project:

```json
{
    "type": "path",
    "url": "/var/www/buffalo.package/packages/buffalo/api"
}
```

Then:

```bash
composer update buffalo/api
```

Laravel registers `BuffaloApiServiceProvider` and the `BuffaloApi` facade through package auto-discovery. You do not need to register the provider by hand.

### Git repository

When the package has its own git remote:

```json
{
    "require": {
        "buffalo/api": "^1.0"
    },
    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:MotsumiDarts/BA_API_Package.git"
        }
    ]
}
```

```bash
composer require buffalo/api:^1.0
```

Composer only treats tagged git refs as stable. `^1.0` needs a `1.0.0` (or `v1.0.0`) tag on the package repo. Without a tag, `composer require buffalo/api` fails because Laravel's `minimum-stability` is `stable` and the only available version is `dev-main`.

If you must install from a branch before a tag exists:

```bash
composer require buffalo/api:dev-main
```

Private repositories need SSH access or a [Composer auth token](https://getcomposer.org/doc/articles/authentication-for-private-packages.md).

## Configuration

Publishing the config file is optional. Environment variables work without it.

```bash
php artisan vendor:publish --tag=buffalo-api-config
```

In the consuming app `.env`:

```env
BUFFALO_API_URL=http://buffalo-api.loc/api
BUFFALO_API_TOKEN=
BUFFALO_API_TIMEOUT=30
BUFFALO_API_RETRIES=0
BUFFALO_API_RETRY_SLEEP=100
```

| Variable | Purpose |
|---|---|
| `BUFFALO_API_URL` | API base URL **including** the `/api` suffix |
| `BUFFALO_API_TOKEN` | Sanctum/Passport Bearer token. Optional if you call `login()` |
| `BUFFALO_API_TIMEOUT` | Request timeout in seconds |
| `BUFFALO_API_RETRIES` | Retry count on connection failures |
| `BUFFALO_API_RETRY_SLEEP` | Delay between retries in milliseconds |

Confirm the package is loaded:

```bash
php artisan about
```

The `Buffalo API` section should show the base URL and whether a token is set.

## Install in plain PHP

`Client` does not use the `Http` facade. Pass an `Illuminate\Http\Client\Factory` as the first constructor argument so it works without a booted Laravel container:

```bash
composer require buffalo/api
```

```php
use Buffalo\Api\Client;
use Illuminate\Http\Client\Factory;

$http = new Factory();
$client = new Client($http, 'http://buffalo-api.loc/api');

$client->login('user@example.com', 'secret');
$client->animals()->getAllAnimals();
```

`Client::make()` builds a factory for you:

```php
$client = Client::make('http://buffalo-api.loc/api');
$client = Client::make('http://buffalo-api.loc/api', token: $token, http: $http);
```

Laravel apps should keep using auto-discovery (`BuffaloApi` / `app(Client::class)`). The service provider injects the application HTTP factory, so `Http::fake()` still works.

## Usage

### Facade (Laravel)

```php
use Buffalo\Api\Exceptions\AuthenticationException;
use Buffalo\Api\Facades\BuffaloApi;

$pong = BuffaloApi::misc()->ping();

if ($pong->successful()) {
    $pong->json();
}

try {
    BuffaloApi::login('user@example.com', 'secret');
} catch (AuthenticationException $e) {
    // login did not return a token
}

$animals = BuffaloApi::animals()->getAllAnimals(['per_page' => 50]);

if ($animals->successful()) {
    $animals->data();
}

BuffaloApi::farms()->createNewFarmApplication([
    'name' => 'Demo farm',
]);
```

`login()` stores the token on the singleton client. Later requests send `Authorization: Bearer …`.

If you already have a token (session, database, `.env`):

```php
BuffaloApi::withToken($request->user()->buffaloApiToken)
    ->animals()
    ->createAnimal(['name' => 'Bella']);
```

### Container

```php
use Buffalo\Api\Client;

public function __construct(private Client $buffaloApi)
{
}

public function index(): mixed
{
    return $this->buffaloApi->persons()->getPersons();
}
```

### Raw request

When an endpoint has no generated method yet:

```php
BuffaloApi::send('GET', 'ping');
BuffaloApi::send('POST', 'animals/create-animal', data: ['name' => 'Bella']);
```

### Response

`BuffaloResponse` wraps `Illuminate\Http\Client\Response`:

| Method | Returns |
|---|---|
| `successful()` | HTTP 2xx |
| `failed()` | HTTP 4xx/5xx |
| `status()` | Status code |
| `json($key = null)` | JSON payload |
| `data()` | JSON as an array |
| `body()` | Raw body |
| `throw()` | Throws on HTTP errors |

```php
$response = BuffaloApi::animals()->createAnimal($payload);

if ($response->failed()) {
    $response->json('message');
}

$response->throw();
```

## Resources

Methods are grouped by URL prefix. Method names are camelCase versions of the remaining path.

```php
BuffaloApi::animals()->createAnimal($data);
BuffaloApi::farms()->getAllFarms($query);
BuffaloApi::persons()->getPersonByUuid(['uuid' => $uuid]);
BuffaloApi::marketplace()->catalog($query);
BuffaloApi::auth()->login($data);
BuffaloApi::misc()->ping();
```

See `src/AccessesResources.php` for accessors and `src/GeneratedResources.php` for the endpoint map.

## What this package is not

Do not Composer-require `buffalo-api/app/**` and do not point a path repository at the API application. buffalo-api is a full Laravel app: that would boot a second container and collide on the `App\` namespace.

Keep domain logic in buffalo-api. This package only calls the HTTP API.

## Regenerating resources (package maintainers)

When buffalo-api routes change, run this from the host app that contains the package:

```bash
php artisan buffalo-api:generate --from=/var/www/buffalo-api
```

`--from` can be:

- the buffalo-api project directory (`storage/api-docs/api-docs.json` and `routes/*.php`)
- a path to an OpenAPI JSON file
- an OpenAPI JSON URL

Commit the updated files under `src/Resources`, plus `src/AccessesResources.php` and `src/GeneratedResources.php`. Consuming apps only need to update the `buffalo/api` dependency.
