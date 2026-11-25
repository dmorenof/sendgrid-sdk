<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3;

final class Ips extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'exclude_whitelabels' => 'exclude_whitelabels',
            'ip' => 'ip',
            'limit' => 'limit',
            'offset' => 'offset',
            'sort_by_direction' => 'sort_by_direction',
            'subuser' => 'subuser',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'limit' => [
            'minimum' => 1,
        ],
        'offset' => [
            'minimum' => 0,
        ],
    ];

    public ?bool $exclude_whitelabels;
    public ?string $ip;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?int $offset {
        set {
            $this->assigning('offset', $value);
            $this->offset = $value;
        }
    }
    public ?\SendGridSDK\Enums\SortBy\Direction $sort_by_direction;
    public ?string $subuser;
}
