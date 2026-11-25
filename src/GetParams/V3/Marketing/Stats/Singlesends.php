<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Marketing\Stats;

final class Singlesends extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'page_size' => 'page_size',
            'page_token' => 'page_token',
            'singlesend_ids' => 'singlesend_ids',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'page_size' => [
            'minimum' => 1,
            'maximum' => 50,
        ],
        'singlesend_ids' => [
            'minItems' => 1,
            'maxItems' => 25,
            'items' => [
                'type' => 'string',
                'rules' => [],
            ],
        ],
    ];

    public ?int $page_size {
        set {
            $this->assigning('page_size', $value);
            $this->page_size = $value;
        }
    }
    public ?string $page_token;
    /** @var list<string>|null */
    public ?array $singlesend_ids;
}
