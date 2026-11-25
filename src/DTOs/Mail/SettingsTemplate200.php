<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Mail;

/**
 * Mail Settings: Template
 * Example: {"enabled":false,"html_content":"<p><% body %>Example</p>\n"}
 */
final class SettingsTemplate200 extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates if the legacy email template setting is enabled.
     */
    public bool $enabled;
    /**
     * The HTML content that you want to use for your legacy email template.
     */
    public string $html_content;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'html_content' => is_string($value) ? $this->html_content = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
