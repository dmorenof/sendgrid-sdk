<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3;

final class Teammates extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'limit' => 'limit',
            'offset' => 'offset',
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
            'maximum' => 500,
        ],
        'offset' => [
            'minimum' => 0,
        ],
    ];

    public ?string $onBehalfOf;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?int $offset {
        set {
            $this->assigning('offset', $value);
            $this->offset = $value;
        }
    }
}
