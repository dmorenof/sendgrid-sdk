<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AccountProvisioning;

/**
 * Account
 * Example: {"id":"","created_at":"2022-01-02T15:04:05Z"}
 */
final class Account extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created_at',
        'id',
    ];

    /**
     * Timestamp indicating when the account was created. Format is [RFC3339](https://datatracker.ietf.org/doc/html/rfc3339)
     * Format: date-time
     */
    public string $created_at;
    /**
     * Twilio SendGrid account ID
     */
    public string $id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
