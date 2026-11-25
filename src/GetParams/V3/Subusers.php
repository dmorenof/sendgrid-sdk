<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3;

final class Subusers extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'include_region' => 'include_region',
            'limit' => 'limit',
            'offset' => 'offset',
            'region' => 'region',
            'username' => 'username',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'offset' => [
            'minimum' => 0,
        ],
    ];

    public ?bool $include_region;
    public ?int $limit;
    public ?int $offset {
        set {
            $this->assigning('offset', $value);
            $this->offset = $value;
        }
    }
    public ?\SendGridSDK\Enums\Subusers\Region $region;
    public ?string $username;
}
