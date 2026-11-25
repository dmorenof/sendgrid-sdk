<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Mail\Send\Post\MailSettings;

/**
 * Allows you to bypass the global unsubscribe list to ensure that the email is delivered to recipients. Bounce and spam report lists will still be checked; addresses on these other lists will not receive the message. This filter applies only to global unsubscribes and will not bypass group unsubscribes. This filter cannot be combined with the `bypass_list_management` filter. See the [the "Bypass suppressions" section of our **Suppressions Overview**](https://sendgrid.com/docs/ui/sending-email/index-suppressions/#bypass-suppressions) for more about bypass filters.
 */
final class UnsubscribeManagementRequest extends \Dmorenof\SdkRuntime\DTO
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
