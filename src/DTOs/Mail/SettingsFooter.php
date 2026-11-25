<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Mail;

/**
 * Mail Settings: Footer
 * Example: {"enabled":true,"html_content":"Example HTML content","plain_content":"Example plain content"}
 */
final class SettingsFooter extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates if the Footer mail setting is currently enabled.
     */
    public bool $enabled;
    /**
     * The custom HTML content of your email footer.
     */
    public string $html_content;
    /**
     * The plain text content of your email footer.
     */
    public string $plain_content;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'html_content' => is_string($value) ? $this->html_content = $value : parent::assignMember($name, $value),
            'plain_content' => is_string($value) ? $this->plain_content = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
