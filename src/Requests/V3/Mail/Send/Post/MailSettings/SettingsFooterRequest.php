<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Mail\Send\Post\MailSettings;

/**
 * Inserts a custom footer at the bottom of the text and HTML bodies of your messages. Use the `html` and `text` properties to include the content of the footers to be inserted.
 */
final class SettingsFooterRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates if this setting is enabled.
     */
    public bool $enable;
    /**
     * The HTML content of your footer.
     */
    public string $html;
    /**
     * The plain text content of your footer.
     */
    public string $text;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enable' => is_bool($value) ? $this->enable = $value : parent::assignMember($name, $value),
            'html' => is_string($value) ? $this->html = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
