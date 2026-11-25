<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Marketing;

final class Segments extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'ids' => 'ids',
            'no_parent_list_id' => 'no_parent_list_id',
            'parent_list_ids' => 'parent_list_ids',
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

    /** @var list<string>|null */
    public ?array $ids;
    public ?bool $no_parent_list_id;
    public ?string $parent_list_ids;
}
