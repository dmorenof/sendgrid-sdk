<?php

declare(strict_types=1);

namespace SendGridSDK\PathParams\V3\Ips\Pools\ByPoolName\Ips;

final class ByIp extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ip',
        'pool_name',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'ip' => 'ip',
            'pool_name' => 'pool_name',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $ip;
    public string $pool_name;
}
