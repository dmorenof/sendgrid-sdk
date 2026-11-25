<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\MailSettings\Template;

/**
 * Example: {"enabled":true,"html_content":"<% body %>"}
 */
final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates if you want to enable the legacy email template mail setting.
     */
    public bool $enabled;
    /**
     * The new HTML content for your legacy email template.
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
