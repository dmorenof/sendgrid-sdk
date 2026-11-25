<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * Settings: Click Tracking
 * Example: {"enable_text":false,"enabled":false}
 */
final class ClickTracking extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enable_text',
        'enabled',
    ];

    /**
     * Indicates if click tracking is enabled for plain text emails.
     */
    public bool $enable_text;
    /**
     * Indicates if click tracking is enabled or disabled.
     */
    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enable_text' => is_bool($value) ? $this->enable_text = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
