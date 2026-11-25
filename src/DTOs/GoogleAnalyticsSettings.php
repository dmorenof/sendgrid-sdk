<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * Settings: Google Analytics
 * Example: {"enabled":true,"utm_source":"sendgrid.com","utm_medium":"email","utm_term":"","utm_content":"","utm_campaign":"website"}
 */
final class GoogleAnalyticsSettings extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates if Google Analytics is enabled.
     */
    public bool $enabled;
    /**
     * The name of the campaign.
     */
    public string $utm_campaign;
    /**
     * Used to differentiate ads
     */
    public string $utm_content;
    /**
     * Name of the marketing medium (e.g. "Email").
     */
    public string $utm_medium;
    /**
     * Name of the referrer source.
     */
    public string $utm_source;
    /**
     * Any paid keywords.
     */
    public string $utm_term;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'utm_campaign' => is_string($value) ? $this->utm_campaign = $value : parent::assignMember($name, $value),
            'utm_content' => is_string($value) ? $this->utm_content = $value : parent::assignMember($name, $value),
            'utm_medium' => is_string($value) ? $this->utm_medium = $value : parent::assignMember($name, $value),
            'utm_source' => is_string($value) ? $this->utm_source = $value : parent::assignMember($name, $value),
            'utm_term' => is_string($value) ? $this->utm_term = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
