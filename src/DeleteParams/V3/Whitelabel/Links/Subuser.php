<?php

declare(strict_types=1);

namespace SendGridSDK\DeleteParams\V3\Whitelabel\Links;

final class Subuser extends \Dmorenof\SdkRuntime\DTO
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
