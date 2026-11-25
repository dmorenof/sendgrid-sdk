<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Subusers\BySubuserName\Stats;

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
        ],
        'header' => [],
    ];

    public string $date;
    public ?int $limit;
    public ?int $offset;
    public ?\SendGridSDK\Enums\SortBy\Direction $sort_by_direction;
    public ?string $sort_by_metric;
}
