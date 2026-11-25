<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Partners\Accounts\ByAccountID;

final class Ips extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'limit' => 'limit',
            'offset' => 'offset',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'limit' => [
            'minimum' => 1,
            'maximum' => 5000,
        ],
    ];

    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?string $offset;
}
