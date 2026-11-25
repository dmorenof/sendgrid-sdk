<?php

declare(strict_types=1);

namespace SendGridSDK\PostParams\V3\Partners;

final class Accounts extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'body',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [],
        'header' => [
            'T-Test-Account' => 'TTestAccount',
        ],
    ];

    protected const array PROPERTY_MAP = [
        'T-Test-Account' => 'TTestAccount',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'TTestAccount' => 'T-Test-Account',
    ];

    public const bool OPERATION_BODY = true;

    public ?string $TTestAccount;
    public \SendGridSDK\Requests\V3\Partners\Accounts\Post $body;
}
