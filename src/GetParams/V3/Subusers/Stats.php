<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Subusers;

final class Stats extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'start_date',
        'subusers',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'aggregated_by' => 'aggregated_by',
            'end_date' => 'end_date',
            'limit' => 'limit',
            'offset' => 'offset',
            'start_date' => 'start_date',
            'subusers' => 'subusers',
        ],
        'header' => [],
    ];

    public ?\SendGridSDK\Enums\Subusers\AggregatedBy $aggregated_by;
    public ?string $end_date;
    public ?int $limit;
    public ?int $offset;
    public string $start_date;
    public string $subusers;
}
