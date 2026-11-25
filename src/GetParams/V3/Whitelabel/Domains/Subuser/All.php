<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Whitelabel\Domains\Subuser;

final class All extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'username',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'username' => 'username',
        ],
        'header' => [],
    ];

    public string $username;
}
