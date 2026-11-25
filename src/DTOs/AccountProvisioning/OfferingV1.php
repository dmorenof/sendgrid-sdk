<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AccountProvisioning;

/**
 * Offering
 *
 * An offering is a package (email infrastructure) or add-on (marketing campaigns, dedicated IP addresses, EASE) that an account can acquire. Each offering has a list of entitlements that indicate the benefits the account receives from the acquisition.
 * Example: {"name":"org.ei.free.v1","type":"package","quantity":1}
 */
final class OfferingV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
        'type',
    ];

    /**
     * Name of the offering
     */
    public string $name;
    /**
     * Quantity of the specified addon to be added. If offering type is `package`, quantity must be 1.
     * Format: int64
     */
    public int $quantity;
    /**
     * Defines the type of offering (e.g., package or addon).
     */
    public \SendGridSDK\Enums\AccountProvisioning\Type $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \SendGridSDK\Enums\AccountProvisioning\Type::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
