<?php

declare(strict_types=1);

namespace SendGridSDK\DeleteParams\V3\Marketing;

final class Singlesends extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'ids' => 'ids',
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
}
