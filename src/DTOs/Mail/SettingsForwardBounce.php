<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Mail;

/**
 * Mail Settings: Forward Bounce
 * Example: {"enabled":false,"email":"email&#64;example.com"}
 */
final class SettingsForwardBounce extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The email address that you would like your bounce reports forwarded to.
     */
    public ?string $email;
    /**
     * Indicates if the bounce forwarding mail setting is enabled.
     */
    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => $value === null || is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
