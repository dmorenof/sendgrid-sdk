<?php

declare(strict_types=1);

namespace SendGridSDK\DeleteParams\V3\Marketing;

final class Integrations extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ids',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'ids' => 'ids',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'ids' => [
            'items' => [
                'type' => 'string',
                'rules' => [],
            ],
        ],
    ];

    /** @var list<string> */
    public array $ids;
}
