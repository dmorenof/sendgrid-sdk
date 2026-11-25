<?php

declare(strict_types=1);

namespace SendGridSDK\DeleteParams\V3\Whitelabel\Domains;

final class Subuser extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'username' => 'username',
        ],
        'header' => [],
    ];

    public ?string $username;
}
