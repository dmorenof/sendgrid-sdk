<?php

declare(strict_types=1);

namespace SendGridSDK\PostParams\V3\Messages;

final class Download extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'query' => 'query',
        ],
        'header' => [],
    ];

    public ?string $query;
}
