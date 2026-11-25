<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Engagementquality\Subusers;

final class Scores extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'date',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'after_key' => 'after_key',
            'date' => 'date',
            'limit' => 'limit',
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

    protected const array VALIDATION = [
        'limit' => [
            'minimum' => 0,
            'maximum' => 1000,
        ],
    ];

    public ?string $onBehalfOf;
    public ?int $after_key;
    public string $date;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
}
