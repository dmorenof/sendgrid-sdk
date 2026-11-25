<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\MailSettings\AddressWhitelist;

/**
 * Example: {"enabled":true,"list":["email1&#64;example.com","example.com"]}
 */
final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
        'list' => 'list_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'list_' => 'list',
    ];

    /**
     * Indicates if your email address whitelist is enabled.
     */
    public bool $enabled;
    /**
     * Either a single email address that you want whitelisted or a domain, for which all email addresses belonging to this domain will be whitelisted.
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
