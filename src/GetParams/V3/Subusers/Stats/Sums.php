<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Subusers\Stats;

final class Sums extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'start_date',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'aggregated_by' => 'aggregated_by',
            'end_date' => 'end_date',
            'limit' => 'limit',
            'offset' => 'offset',
            'sort_by_direction' => 'sort_by_direction',
            'sort_by_metric' => 'sort_by_metric',
            'start_date' => 'start_date',
        ],
        'header' => [],
    ];

    public ?string $aggregated_by;
    public ?string $end_date;
    public ?int $limit;
    public ?int $offset;
    public ?\SendGridSDK\Enums\SortBy\Direction2 $sort_by_direction;
    public ?string $sort_by_metric;
    public string $start_date;
}
