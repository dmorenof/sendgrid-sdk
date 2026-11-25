<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Mail\Send\Post\MailSettings;

/**
 * Allows you to bypass all unsubscribe groups and suppressions to ensure that the email is delivered to every single recipient. This should only be used in emergencies when it is absolutely necessary that every recipient receives your email. This filter cannot be combined with any other bypass filters. See the [the "Bypass suppressions" section of our **Suppressions Overview**](https://sendgrid.com/docs/ui/sending-email/index-suppressions/#bypass-suppressions) for more about bypass filters.
 */
final class ListManagementRequest extends \Dmorenof\SdkRuntime\DTO
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
