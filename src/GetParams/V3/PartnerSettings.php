<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3;

final class PartnerSettings extends \Dmorenof\SdkRuntime\DTO
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
        'offset' => [
            'minimum' => 0,
        ],
    ];

    public ?string $onBehalfOf;
    public ?int $limit;
    public ?int $offset {
        set {
            $this->assigning('offset', $value);
            $this->offset = $value;
        }
    }
}
