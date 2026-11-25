<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Subusers\Stats;

final class Monthly extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'date',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'date' => 'date',
            'limit' => 'limit',
            'offset' => 'offset',
            'sort_by_direction' => 'sort_by_direction',
            'sort_by_metric' => 'sort_by_metric',
            'subuser' => 'subuser',
        ],
        'header' => [],
    ];

    public string $date;
    public ?int $limit;
    public ?int $offset;
    public ?\SendGridSDK\Enums\SortBy\Direction1 $sort_by_direction;
    public ?\SendGridSDK\Enums\SortBy\Metric $sort_by_metric;
    public ?string $subuser;
}
