<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Logs;

final class BySgMessageId extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'subuser' => 'subuser',
        ],
        'header' => [],
    ];

    public ?string $subuser;
}
