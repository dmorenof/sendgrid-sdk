<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Marketing\Stats\Singlesends;

final class Export extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'ids' => 'ids',
            'timezone' => 'timezone',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'ids' => [
            'minItems' => 1,
            'maxItems' => 50,
            'items' => [
                'type' => 'string',
                'rules' => [],
            ],
        ],
    ];

    /** @var list<string>|null */
    public ?array $ids;
    public ?string $timezone;
}
