<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\User\Webhooks\Parse;

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
            'limit' => 'limit',
            'offset' => 'offset',
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
    public ?\SendGridSDK\Enums\WebhooksAggregatedBy $aggregated_by;
    public ?string $end_date;
    public ?string $limit;
    public ?string $offset;
    public string $start_date;
}
