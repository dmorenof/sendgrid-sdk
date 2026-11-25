<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Marketing\Stats\Singlesends\ById;

final class Links extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'ab_phase_id' => 'ab_phase_id',
            'ab_variation_id' => 'ab_variation_id',
            'group_by' => 'group_by',
            'page_size' => 'page_size',
            'page_token' => 'page_token',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'group_by' => [
            'items' => [
                'type' => 'string',
                'rules' => [
                    'enum' => [
                        'ab_phase',
                        'ab_variation',
                    ],
                ],
            ],
        ],
        'page_size' => [
            'minimum' => 1,
            'maximum' => 50,
        ],
    ];

    public ?\SendGridSDK\Enums\Ab\PhaseId $ab_phase_id;
    public ?string $ab_variation_id;
    /** @var list<string>|null */
    public ?array $group_by;
    public ?int $page_size {
        set {
            $this->assigning('page_size', $value);
            $this->page_size = $value;
        }
    }
    public ?string $page_token;
}
