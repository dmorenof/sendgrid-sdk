<?php

declare(strict_types=1);

namespace SendGridSDK\PostParams\V3\Marketing\Singlesends;

final class Search extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'page_size' => 'page_size',
            'page_token' => 'page_token',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    public ?int $page_size;
    public ?string $page_token;
    public ?\SendGridSDK\DTOs\Singlesend\Search $body;
}
