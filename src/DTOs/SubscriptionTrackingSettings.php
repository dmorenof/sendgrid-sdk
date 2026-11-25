<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * Settings: Subscription Tracking
 */
final class SubscriptionTrackingSettings extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates if subscription tracking is enabled.
     */
    public bool $enabled;
    /**
     * The information and HTML for your unsubscribe link.
     */
    public string $html_content;
    /**
     * The HTML that will be displayed on the page that your customers will see after clicking unsubscribe, hosted on SendGrid’s server.
     */
    public string $landing;
    /**
     * The information in plain text for your unsubscribe link. You should have the “<% %>” tag in your content, otherwise the user will have no URL for unsubscribing.
     */
    public string $plain_content;
    /**
     * Your custom defined replacement tag for your templates. Use this tag to place your unsubscribe content anywhere in your emailtemplate.
     */
    public string $replace;
    /**
     * The URL where you would like your users sent to unsubscribe.
     * Format: uri
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'html_content' => is_string($value) ? $this->html_content = $value : parent::assignMember($name, $value),
            'landing' => is_string($value) ? $this->landing = $value : parent::assignMember($name, $value),
            'plain_content' => is_string($value) ? $this->plain_content = $value : parent::assignMember($name, $value),
            'replace' => is_string($value) ? $this->replace = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
