<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\User\Credits;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'last_reset',
        'next_reset',
        'overage',
        'remain',
        'reset_frequency',
        'total',
        'used',
    ];

    /**
     * The date that your credit balance was last reset.
     */
    public string $last_reset;
    /**
     * The next date that your credit balance will be reset.
     */
    public string $next_reset;
    /**
     * The number of overdrawn credits for your account.
     */
    public int $overage;
    /**
     * The remaining number of credits available on your account.
     */
    public int $remain;
    /**
     * The frequency at which your credit balance will be reset.
     */
    public string $reset_frequency;
    /**
     * The total number of credits assigned to your account.
     */
    public int $total;
    /**
     * The number of credits that you have used.
     */
    public int $used;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'last_reset' => is_string($value) ? $this->last_reset = $value : parent::assignMember($name, $value),
            'next_reset' => is_string($value) ? $this->next_reset = $value : parent::assignMember($name, $value),
            'overage' => is_int($value) ? $this->overage = $value : parent::assignMember($name, $value),
            'remain' => is_int($value) ? $this->remain = $value : parent::assignMember($name, $value),
            'reset_frequency' => is_string($value) ? $this->reset_frequency = $value : parent::assignMember($name, $value),
            'total' => is_int($value) ? $this->total = $value : parent::assignMember($name, $value),
            'used' => is_int($value) ? $this->used = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
