<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AccountProvisioning;

/**
 * AssignedOffering
 *
 * An offering assigned to an account, including optional start and end dates indicating when the offering was activated and when it expires.
 * Example: {"name":"org.ei.free.v1","type":"package","quantity":1,"start_date":"2024-01-02T15:04:05Z","end_date":"2025-01-02T15:04:05Z"}
 */
final class AssignedOfferingV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
        'type',
    ];

    /**
     * Timestamp indicating when the offering expires. Format is [RFC3339](https://datatracker.ietf.org/doc/html/rfc3339). Absent if the offering has no expiry.
     * Format: date-time
     */
    public string $end_date;
    /**
     * Name of the offering
     */
    public string $name;
    /**
     * Quantity of the specified addon. If offering type is `package`, quantity must be 1.
     * Format: int64
     */
    public int $quantity;
    /**
     * Timestamp indicating when the offering was activated on the account. Format is [RFC3339](https://datatracker.ietf.org/doc/html/rfc3339).
     * Format: date-time
     */
    public string $start_date;
    /**
     * Defines the type of offering (e.g., package or addon).
     */
    public \SendGridSDK\Enums\AccountProvisioning\Type1 $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'end_date' => is_string($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'start_date' => is_string($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \SendGridSDK\Enums\AccountProvisioning\Type1::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
