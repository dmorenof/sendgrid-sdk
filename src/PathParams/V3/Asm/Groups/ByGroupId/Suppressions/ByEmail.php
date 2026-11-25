<?php

declare(strict_types=1);

namespace SendGridSDK\PathParams\V3\Asm\Groups\ByGroupId\Suppressions;

final class ByEmail extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email',
        'group_id',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'email' => 'email',
            'group_id' => 'group_id',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $email;
    public string $group_id;
}
