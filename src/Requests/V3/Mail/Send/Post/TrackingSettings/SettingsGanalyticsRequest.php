<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Mail\Send\Post\TrackingSettings;

/**
 * Allows you to enable tracking provided by Google Analytics. See [**Google Analytics and SendGrid Statistics**](https://docs.sendgrid.com/ui/analytics-and-reporting/google-analytics) for more information about this property.
 */
final class SettingsGanalyticsRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates if this setting is enabled.
     */
    public bool $enable;
    /**
     * The name of the campaign.
     */
    public string $utm_campaign;
    /**
     * Used to differentiate your campaign from advertisements.
     */
    public string $utm_content;
    /**
     * Name of the marketing medium. (e.g., Email)
     */
    public string $utm_medium;
    /**
     * Name of the referrer source. (e.g., Google, SomeDomain.com, or Marketing Email)
     */
    public string $utm_source;
    /**
     * Used to identify any paid keywords.
     */
    public string $utm_term;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enable' => is_bool($value) ? $this->enable = $value : parent::assignMember($name, $value),
            'utm_campaign' => is_string($value) ? $this->utm_campaign = $value : parent::assignMember($name, $value),
            'utm_content' => is_string($value) ? $this->utm_content = $value : parent::assignMember($name, $value),
            'utm_medium' => is_string($value) ? $this->utm_medium = $value : parent::assignMember($name, $value),
            'utm_source' => is_string($value) ? $this->utm_source = $value : parent::assignMember($name, $value),
            'utm_term' => is_string($value) ? $this->utm_term = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
