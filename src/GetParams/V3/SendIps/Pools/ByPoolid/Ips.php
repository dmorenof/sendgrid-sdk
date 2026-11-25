<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\SendIps\Pools\ByPoolid;

final class Ips extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'after_key' => 'after_key',
            'include_region' => 'include_region',
            'limit' => 'limit',
        ],
        'header' => [],
    ];

    public ?int $after_key;
    public ?bool $include_region;
    public ?int $limit;
}
