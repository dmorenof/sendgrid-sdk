<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Subuser;

/**
 * Credits of a Subuser
 * Example: {"type":"recurring","reset_frequency":"monthly","remain":99,"total":100,"used":1}
 */
final class Credits extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'remain',
        'reset_frequency',
        'total',
        'type',
        'used',
    ];

    protected const array VALIDATION = [
        'remain' => [
            'minimum' => 0,
        ],
        'total' => [
            'minimum' => 0,
        ],
        'used' => [
            'minimum' => 0,
        ],
    ];

    /**
     * Total number of remaining credits. `remain` is `null` if the reset `type` for the Subuser's credits is set to `unlimited`.
     */
    public ?int $remain {
        set {
            $this->assigning('remain', $value);
            $this->remain = $value;
        }
    }
    /**
     * The frequency with which a Subuser's credits are reset if `type` is set to `recurring`, otherwise `null`.
     */
    public ?\SendGridSDK\Enums\ResetFrequency $reset_frequency;
    /**
     * Total number of allowable credits. `total` is `null` if the reset `type` for the Subuser's credits is set to `unlimited` or `nonrecurring`.
     */
    public ?int $total {
        set {
            $this->assigning('total', $value);
            $this->total = $value;
        }
    }
    /**
     * Type determines how credits are reset for a Subuser. `unlimited` indicates that there is no limit to the Subuser's credits. `recurring` indicates that the credits for the Subuser are reset according to the frequency determined by `reset_frequency`. `nonrecurring` indicates that there is no recurring schedule to reset credits and resets must be done on an ad hoc basis.
     */
    public \SendGridSDK\Enums\Subusers\Type $type;
    /**
     * Total number of used credits. `used` is `null` if the reset `type` for the Subuser's credits is set to `unlimited` or `nonrecurring`.
     */
    public ?int $used {
        set {
            $this->assigning('used', $value);
            $this->used = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'remain' => $value === null || is_int($value) ? $this->remain = $value : parent::assignMember($name, $value),
            'reset_frequency' => $value === null || is_string($value) ? $this->reset_frequency = $value === null ? null : \SendGridSDK\Enums\ResetFrequency::from($value) : parent::assignMember($name, $value),
            'total' => $value === null || is_int($value) ? $this->total = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \SendGridSDK\Enums\Subusers\Type::from($value) : parent::assignMember($name, $value),
            'used' => $value === null || is_int($value) ? $this->used = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
