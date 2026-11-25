<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Marketing\Stats\Automations;

final class ById extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'aggregated_by' => 'aggregated_by',
            'end_date' => 'end_date',
            'group_by' => 'group_by',
            'page_size' => 'page_size',
            'page_token' => 'page_token',
            'start_date' => 'start_date',
            'step_ids' => 'step_ids',
            'timezone' => 'timezone',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'group_by' => [
            'items' => [
                'type' => 'string',
                'rules' => [
                    'enum' => [
                        'step_id',
                    ],
                ],
            ],
        ],
        'page_size' => [
            'minimum' => 1,
            'maximum' => 50,
        ],
        'step_ids' => [
            'uniqueItems' => true,
            'items' => [
                'type' => 'string',
                'rules' => [],
            ],
        ],
    ];

    public ?\SendGridSDK\Enums\Mc\StatsAggregatedBy $aggregated_by;
    public ?string $end_date;
    /** @var list<string>|null */
    public ?array $group_by;
    public ?int $page_size {
        set {
            $this->assigning('page_size', $value);
            $this->page_size = $value;
        }
    }
    public ?string $page_token;
    public ?string $start_date;
    /** @var list<string>|null */
    public ?array $step_ids;
    public ?string $timezone;
}
