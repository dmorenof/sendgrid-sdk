<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Marketing;

final class Lists extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'page_size' => 'page_size',
            'page_token' => 'page_token',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'page_size' => [
            'minimum' => 1,
            'maximum' => 1000,
        ],
    ];

    public ?float $page_size {
        set {
            $this->assigning('page_size', $value);
            $this->page_size = $value;
        }
    }
    public ?string $page_token;
}
