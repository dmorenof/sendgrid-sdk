<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Mail;

/**
 * Mail Settings: Bounce Purge
 * Example: {"enabled":false,"soft_bounces":1234,"hard_bounces":1234}
 */
final class SettingsBouncePurge extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates if the Bounce Purge mail setting is enabled.
     */
    public bool $enabled;
    /**
     * The number of days after which SendGrid will purge all contacts from your hard bounces suppression lists.
     */
    public ?int $hard_bounces;
    /**
     * The number of days after which SendGrid will purge all contacts from your soft bounces suppression lists.
     */
    public ?int $soft_bounces;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'hard_bounces' => $value === null || is_int($value) ? $this->hard_bounces = $value : parent::assignMember($name, $value),
            'soft_bounces' => $value === null || is_int($value) ? $this->soft_bounces = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
