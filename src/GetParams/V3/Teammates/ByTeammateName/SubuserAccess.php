<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Teammates\ByTeammateName;

final class SubuserAccess extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'after_subuser_id' => 'after_subuser_id',
            'limit' => 'limit',
            'username' => 'username',
        ],
        'header' => [],
    ];

    public ?int $after_subuser_id;
    public ?int $limit;
    public ?string $username;
}
