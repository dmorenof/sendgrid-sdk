<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Mail;

/**
 * Mail Settings: Address Whitelabel
 * Example: {"enabled":true,"list":["email1&#64;example.com","example.com"]}
 */
final class SettingsAddressWhitelabel200 extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
        'list' => 'list_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'list_' => 'list',
    ];

    /**
     * Indicates if you have an email address whitelist enabled.
     */
    public bool $enabled;
    /**
     * All email addresses that are currently on the whitelist.
     */
    public \SendGridSDK\Collections\StringCollection $list_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'list' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->list_ = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
