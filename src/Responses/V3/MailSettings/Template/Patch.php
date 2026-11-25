<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\MailSettings\Template;

final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
        'html_content',
    ];

    /**
     * Indicates if the legacy email template mail setting is enabled.
     */
    public bool $enabled;
    /**
     * The HTML content of your legacy email template.
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
