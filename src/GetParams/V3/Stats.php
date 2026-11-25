<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3;

final class Stats extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'start_date',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'aggregated_by' => 'aggregated_by',
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
    public ?\SendGridSDK\Enums\Aggregated\By3 $aggregated_by;
    public ?string $end_date;
    public string $start_date;
}
