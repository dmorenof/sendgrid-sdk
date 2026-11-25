<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\SendIps\Ips\ByIp;

final class Subusers extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'after_key' => 'after_key',
            'limit' => 'limit',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'limit' => [
            'maximum' => 100,
        ],
    ];

    public ?int $after_key;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
}
