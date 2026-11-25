<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\SendIps;

final class Ips extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'after_key' => 'after_key',
            'before_key' => 'before_key',
            'end_added_at' => 'end_added_at',
            'include_region' => 'include_region',
            'ip' => 'ip',
            'is_enabled' => 'is_enabled',
            'is_leased' => 'is_leased',
            'is_parent_assigned' => 'is_parent_assigned',
            'limit' => 'limit',
            'pool' => 'pool',
            'region' => 'region',
            'start_added_at' => 'start_added_at',
        ],
        'header' => [],
    ];

    public ?int $after_key;
    public ?string $before_key;
    public ?int $end_added_at;
    public ?bool $include_region;
    public ?string $ip;
    public ?bool $is_enabled;
    public ?bool $is_leased;
    public ?bool $is_parent_assigned;
    public ?int $limit;
    public ?string $pool;
    public ?\SendGridSDK\Enums\Region7 $region;
    public ?int $start_added_at;
}
