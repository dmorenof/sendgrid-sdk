<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Mail\Send\Post\MailSettings;

/**
 * Sandbox Mode allows you to send a test email to ensure that your request body is valid and formatted correctly.
 */
final class SandboxModeRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates if this setting is enabled.
     */
    public bool $enable;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enable' => is_bool($value) ? $this->enable = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
