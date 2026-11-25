<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Marketing;

final class Singlesends extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'page_size' => 'page_size',
            'page_token' => 'page_token',
        ],
        'header' => [],
    ];

    public ?int $page_size;
    public ?string $page_token;
}
