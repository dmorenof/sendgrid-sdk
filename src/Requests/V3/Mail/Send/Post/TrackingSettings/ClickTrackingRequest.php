<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Mail\Send\Post\TrackingSettings;

/**
 * Allows you to track if a recipient clicked a link in your email.
 */
final class ClickTrackingRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates if this setting is enabled.
     */
    public bool $enable;
    /**
     * Indicates if this setting should be included in the `text/plain` portion of your email.
     */
    public bool $enable_text;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enable' => is_bool($value) ? $this->enable = $value : parent::assignMember($name, $value),
            'enable_text' => is_bool($value) ? $this->enable_text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
