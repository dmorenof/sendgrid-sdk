<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AccountProvisioning\Catalog\CatalogItem;

/**
 * Set of entitlements the specified offering comes with
 */
final class EntitlementsDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Total number of email sends per month
     * Format: int64
     */
    public int $email_sends_max_monthly;
    /**
     * Number of dedicated IPs offered
     * Format: int64
     */
    public int $ip_count;
    /**
     * Total number of teammates allowed
     * Format: int64
     */
    public int $teammates_max_total;
    /**
     * Total number of subusers allowed
     * Format: int64
     */
    public int $users_max_total;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email_sends_max_monthly' => is_int($value) ? $this->email_sends_max_monthly = $value : parent::assignMember($name, $value),
            'ip_count' => is_int($value) ? $this->ip_count = $value : parent::assignMember($name, $value),
            'teammates_max_total' => is_int($value) ? $this->teammates_max_total = $value : parent::assignMember($name, $value),
            'users_max_total' => is_int($value) ? $this->users_max_total = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
