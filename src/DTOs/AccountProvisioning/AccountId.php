<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AccountProvisioning;

/**
 * AccountID
 * Example: {"account_id":"sg2a2bcd3ef4ab5c67d8efab91c01de2fa"}
 */
final class AccountId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account_id',
    ];

    /**
     * Twilio SendGrid account ID
     */
    public string $account_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_id' => is_string($value) ? $this->account_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
