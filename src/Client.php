<?php

declare(strict_types=1);

namespace SendGridSDK;

class Client extends \Dmorenof\SdkRuntime\ApiClient
{
    protected const array SECURITY_SCHEMES = [
        'BearerAuth' => [
            'type' => 'http',
            'scheme' => 'bearer',
            'location' => null,
            'parameterName' => null,
        ],
    ];
    protected const array SERVERS = [
        [
            'url' => 'https://api.sendgrid.com',
        ],
        [
            'url' => 'https://api.eu.sendgrid.com',
        ],
    ];

    private static ?self $currentConnection = null;

    /** Replace the current connection using a snapshot of the configuration. */
    public static function configure(Configuration $configuration): void
    {
        self::$currentConnection = self::connect($configuration);
    }

    public static function current(): self
    {
        return self::$currentConnection ?? throw new \LogicException(
            'Configure the SDK with Client::configure(Configuration) first.',
        );
    }
}
