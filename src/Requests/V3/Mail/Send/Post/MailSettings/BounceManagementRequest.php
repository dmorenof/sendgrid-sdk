<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Mail\Send\Post\MailSettings;

/**
 * Allows you to bypass the bounce list to ensure that the email is delivered to recipients. Spam report and unsubscribe lists will still be checked; addresses on these other lists will not receive the message. This filter cannot be combined with the `bypass_list_management` filter. See the [the "Bypass suppressions" section of our **Suppressions Overview**](https://sendgrid.com/docs/ui/sending-email/index-suppressions/#bypass-suppressions) for more about bypass filters.
 */
final class BounceManagementRequest extends \Dmorenof\SdkRuntime\DTO
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
