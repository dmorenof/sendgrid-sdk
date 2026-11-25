<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Marketing\Lists;

final class ById extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'contact_sample' => 'contact_sample',
        ],
        'header' => [],
    ];

    public ?bool $contact_sample;
}
