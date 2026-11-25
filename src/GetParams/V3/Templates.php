<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3;

final class Templates extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'page_size',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'generations' => 'generations',
            'page_size' => 'page_size',
            'page_token' => 'page_token',
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
        'page_size' => [
            'minimum' => 1,
            'maximum' => 200,
        ],
    ];

    public ?string $onBehalfOf;
    public ?\SendGridSDK\Enums\Generations $generations;
    public float $page_size {
        set {
            $this->assigning('page_size', $value);
            $this->page_size = $value;
        }
    }
    public ?string $page_token;
}
