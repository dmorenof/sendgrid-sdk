<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\SendIps;

final class Pools extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'after_key' => 'after_key',
            'include_region' => 'include_region',
            'ip' => 'ip',
            'limit' => 'limit',
            'region' => 'region',
        ],
        'header' => [],
    ];

    public ?int $after_key;
    public ?bool $include_region;
    public ?string $ip;
    public ?int $limit;
    public ?\SendGridSDK\Enums\Region7 $region;
}
