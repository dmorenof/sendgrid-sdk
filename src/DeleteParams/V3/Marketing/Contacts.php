<?php

declare(strict_types=1);

namespace SendGridSDK\DeleteParams\V3\Marketing;

final class Contacts extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'delete_all_contacts' => 'delete_all_contacts',
            'ids' => 'ids',
        ],
        'header' => [],
    ];

    public ?string $delete_all_contacts;
    public ?string $ids;
}
