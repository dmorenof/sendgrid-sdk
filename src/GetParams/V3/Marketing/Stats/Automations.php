<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Marketing\Stats;

final class Automations extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'automation_ids' => 'automation_ids',
            'page_size' => 'page_size',
            'page_token' => 'page_token',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'automation_ids' => [
            'minItems' => 1,
            'maxItems' => 25,
            'items' => [
                'type' => 'string',
                'rules' => [],
            ],
        ],
        'page_size' => [
            'minimum' => 1,
            'maximum' => 50,
        ],
    ];

    /** @var list<string>|null */
    public ?array $automation_ids;
    public ?int $page_size {
        set {
            $this->assigning('page_size', $value);
            $this->page_size = $value;
        }
    }
    public ?string $page_token;
}
