<?php

declare(strict_types=1);

namespace SendGridSDK\PathParams\V3\Whitelabel\Domains\ById\Ips;

final class ByIp extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'ip',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'id' => 'id',
            'ip' => 'ip',
        ],
        'query' => [],
        'header' => [],
    ];

    public int $id;
    public string $ip;
}
