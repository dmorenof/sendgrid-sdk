<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Subuser\Credits;

/**
 * Subuser Credits reset request body
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'total' => [
            'minimum' => 1,
        ],
    ];

    /**
     * The frequency with which a Subuser's credits are reset if `type` is set to `recurring`. Do _not_ include `reset_frequency` if you choose a reset `type` value of `unlimited` or `nonrecurring`.
     */
    public \SendGridSDK\Enums\ResetFrequency1 $reset_frequency;
    /**
     * Total number of credits to which the Subuser is to be reset. If `type` is `nonrecurring` then the Subuser's credits will be reset to `total` on a one-time basis. If `type` is `recurring` then the Subuser's credits will be reset to `total` every time a reset is scheduled in accordance with the `reset_frequency`. Do _not_ include `total` if you choose a reset `type` value of `unlimited`.
     */
    public int $total {
        set {
            $this->assigning('total', $value);
            $this->total = $value;
        }
    }
    /**
     * Type determines how credits are reset for a Subuser. `unlimited` indicates that there is no limit to the Subuser's credits. `recurring` indicates that the credits for the Subuser are reset according to the frequency determined by `reset_frequency`. `nonrecurring` indicates that there is no recurring schedule to reset credits and resets must be done on an ad hoc basis.
     */
    public \SendGridSDK\Enums\Subusers\Type1 $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reset_frequency' => is_string($value) ? $this->reset_frequency = \SendGridSDK\Enums\ResetFrequency1::from($value) : parent::assignMember($name, $value),
            'total' => is_int($value) ? $this->total = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \SendGridSDK\Enums\Subusers\Type1::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
