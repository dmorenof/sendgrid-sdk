<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Suppression;

final class InvalidEmails extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'email' => 'email',
            'end_time' => 'end_time',
            'limit' => 'limit',
            'offset' => 'offset',
            'start_time' => 'start_time',
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
            'minimum' => 1,
            'maximum' => 500,
        ],
        'offset' => [
            'minimum' => 0,
        ],
    ];

    public ?string $onBehalfOf;
    public ?string $email;
    public ?int $end_time;
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
    public ?int $start_time;
}
