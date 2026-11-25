<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Engagementquality;

final class Scores extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'from',
        'to',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'from' => 'from',
            'to' => 'to',
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
    public string $from;
    public string $to;
}
