<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Integration\Input;

/**
 * The configurable filters for SendGrid to destination email event forwarding.
 */
final class FiltersDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email_events',
    ];

    /**
     * The possible SendGrid email event types for event forwarding. Specify all the email event types that you would like to forward to the Integration's destination.
     */
    public \SendGridSDK\Collections\Integration\Input\Filters\EmailEventsCollection $email_events;
}
