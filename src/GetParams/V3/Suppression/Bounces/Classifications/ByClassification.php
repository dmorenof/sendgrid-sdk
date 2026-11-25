<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Suppression\Bounces\Classifications;

final class ByClassification extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'Accept',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'end_date' => 'end_date',
            'start_date' => 'start_date',
        ],
        'header' => [
            'Accept' => 'Accept',
            'on-behalf-of' => 'onBehalfOf',
        ],
    ];

    protected const array PROPERTY_MAP = [
        'on-behalf-of' => 'onBehalfOf',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'onBehalfOf' => 'on-behalf-of',
    ];

    public \SendGridSDK\Enums\Accept1 $Accept;
    public ?string $onBehalfOf;
    public ?string $end_date;
    public ?string $start_date;
}
