<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Categories;

final class Stats extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'categories',
        'start_date',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'aggregated_by' => 'aggregated_by',
            'categories' => 'categories',
            'end_date' => 'end_date',
            'start_date' => 'start_date',
        ],
        'header' => [
            'on-behalf-of' => 'onBehalfOf',
        ],
    ];

    protected const array PROPERTY_MAP = [
        'on-behalf-of' => 'onBehalfOf',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'onBehalfOf' => 'on-behalf-of',
    ];

    public ?string $onBehalfOf;
    public ?\SendGridSDK\Enums\StatsAggregatedBy $aggregated_by;
    public string $categories;
    public ?string $end_date;
    public string $start_date;
}
