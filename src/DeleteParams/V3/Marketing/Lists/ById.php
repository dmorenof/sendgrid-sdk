<?php

declare(strict_types=1);

namespace SendGridSDK\DeleteParams\V3\Marketing\Lists;

final class ById extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'delete_contacts' => 'delete_contacts',
        ],
        'header' => [],
    ];

    public ?bool $delete_contacts;
}
