<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Mail;

/**
 * Mail Settings: Forward Spam
 * Example: {"email":"","enabled":true}
 */
final class SettingsForwardSpam extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The email address where you would like the spam reports to be forwarded.
     */
    public string $email;
    /**
     * Indicates if the Forward Spam setting is enabled.
     */
    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
