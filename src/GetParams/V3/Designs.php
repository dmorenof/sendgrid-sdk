<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3;

final class Designs extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'page_size' => 'page_size',
            'page_token' => 'page_token',
            'summary' => 'summary',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'page_size' => [
            'minimum' => 0,
        ],
    ];

    public ?int $page_size {
        set {
            $this->assigning('page_size', $value);
            $this->page_size = $value;
        }
    }
    public ?string $page_token;
    public ?bool $summary;
}
