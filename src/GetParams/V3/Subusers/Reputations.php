<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Subusers;

final class Reputations extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'usernames' => 'usernames',
        ],
        'header' => [],
    ];

    public ?string $usernames;
}
