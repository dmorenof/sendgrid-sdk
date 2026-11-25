# SendGrid SDK for PHP

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)
[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4%2B-777bb4.svg)](composer.json)
[![PHPStan level max](https://img.shields.io/badge/PHPStan-level%20max-brightgreen.svg)](phpstan.neon)
[![Packagist](https://img.shields.io/packagist/v/dmorenof/sendgrid-sdk.svg)](https://packagist.org/packages/dmorenof/sendgrid-sdk)

**The whole Twilio SendGrid v3 API in one typed PHP package.**

Send mail, manage marketing contacts, lists and campaigns, templates, suppression lists, statistics, subusers, teammates and domain authentication from one SDK instead of one per product, with typed calls generated from the 46 SendGrid product contracts merged into one.

> Unofficial. Not affiliated with, endorsed by or supported by Twilio SendGrid. See [NOTICE.md](NOTICE.md).

## Why this SDK

- All 46 SendGrid v3 product contracts in one package: one Composer dependency, one configuration, one error type.
- Global and EU regional servers selectable in `Configuration`.
- API key sent as a bearer token; typed models for every request and answer.
- **Generated from the contract, never edited by hand.** `src/` is produced from `contract/sendgrid.json` by [sdk-generator](https://github.com/dmorenof/sdk-generator) on top of the shared [sdk-runtime](https://github.com/dmorenof/sdk-runtime): when the contract changes you regenerate, you do not patch.
- **Typed end to end.** 391 operations and 928 typed request, answer and model classes. A request is a model whose fields are checked where you assign them (PHP 8.4 property hooks); an answer is a model; a list is a typed collection. PHPStan at the maximum level reports no error on the whole SDK.
- **One way to fail.** An HTTP answer the contract does not declare as success is an `ApiException` that keeps the raw response and, when the API documents it, the decoded error as a model. Network failures keep their own type.
- **Production controls included.** PSR-18 HTTP client (Guzzle by default), timeouts (30 s / 10 s by default), retries with `Retry-After`, redirect policy, middleware and per-environment servers, all in one `Configuration` object.

## Install

PHP 8.4 or later.

```bash
composer require dmorenof/sendgrid-sdk
```

## Quick start

```php
<?php
use Dmorenof\SdkRuntime\Security\SecurityCredentials;
use SendGridSDK\Configuration;
use SendGridSDK\TwilioSendGridV3APISDK;
use SendGridSDK\V3\ApiKeys;

$configuration = new Configuration();
$configuration->securityCredentials = new SecurityCredentials(['BearerAuth' => getenv('SENDGRID_API_KEY') ?: '']);
TwilioSendGridV3APISDK::configure($configuration);

$keys = ApiKeys::get();

echo json_encode($keys), "\n";
```

The same example is in [examples/quickstart.php](examples/quickstart.php). Every operation is listed in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## What it covers

391 operations. The biggest areas:

| Area | Operations |
| --- | --- |
| `marketing` | 66 |
| `contactdb` | 36 |
| `user` | 35 |
| `whitelabel` | 31 |
| `suppression` | 19 |
| `ips` | 16 |
| `send_ips` | 15 |
| `asm` | 14 |
| `subusers` | 14 |
| `mail_settings` | 13 |
| `partners` | 12 |
| `sso` | 12 |

…and 25 more areas; the full list is in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## Handling errors

```php
use Dmorenof\SdkRuntime\ApiException;

try {
    // ... any call from the quick start
} catch (ApiException $e) {
    echo $e->response->status, "\n";   // the HTTP status
    echo $e->response->body, "\n";     // the raw body, always kept
    var_dump($e->error);                // the decoded error model, when the API documents one
}
```

## Configuration

`Configuration` is the only place to set anything: `baseUrl`, `securityCredentials`, `headers`, `timeout`, `connectTimeout`, `retryPolicy`, `redirectPolicy`, `middleware`, `httpClient` (any PSR-18 client), `serverVariables`. Use `Client::connect($configuration)` instead of the static facades when you need several independent connections.

## Good to know

- SendGrid publishes an official PHP library (`sendgrid/sendgrid`); this one is generated and unofficial.
- SendGrid publishes 46 separate contracts; the one in `contract/` is their merge (colliding names carry the product name, see NOTICE.md).
- Operation class names follow the paths (`V3\Marketing\Contacts`); a few operationIds carry the product as a suffix where two products used the same one.
- Version `0.1.0` is a first release: the API of the SDK follows the contract, and a regenerated contract can rename classes. Pin a version.
- The SDK has been checked against its contract (generation, static analysis, serialization of requests); it has not been run against the live service unless the section above says so. Use test credentials first.

## Documentation

- [Operations catalog](docs/OPERATIONS.md)
- [Vendor documentation](https://www.twilio.com/docs/sendgrid/api-reference)
- [sdk-runtime](https://github.com/dmorenof/sdk-runtime) (what every SDK shares) and [sdk-generator](https://github.com/dmorenof/sdk-generator)
- [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [SECURITY.md](SECURITY.md)

## License

MIT, see [LICENSE.md](LICENSE.md). The license covers this SDK's code, not the API, its trademarks or its terms: see [NOTICE.md](NOTICE.md).
