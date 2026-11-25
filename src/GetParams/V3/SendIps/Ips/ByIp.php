<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\SendIps\Ips;

final class ByIp extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'include_region' => 'include_region',
        ],
        'header' => [],
    ];

    public ?bool $include_region;
}
