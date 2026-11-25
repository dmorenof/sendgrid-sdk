<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Whitelabel;

final class Domains extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'domain' => 'domain',
            'exclude_subusers' => 'exclude_subusers',
            'limit' => 'limit',
            'offset' => 'offset',
            'username' => 'username',
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
    public ?string $domain;
    public ?bool $exclude_subusers;
    public ?int $limit;
    public ?int $offset {
        set {
            $this->assigning('offset', $value);
            $this->offset = $value;
        }
    }
    public ?string $username;
}
