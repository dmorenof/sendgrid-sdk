<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3;

final class Messages extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'query',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'limit' => 'limit',
            'query' => 'query',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'limit' => [
            'minimum' => 1,
            'maximum' => 1000,
        ],
    ];

    public ?float $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public string $query;
}
