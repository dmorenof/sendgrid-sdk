<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Integration;

/**
 * The configurable filters for SendGrid to destination email event forwarding.
 */
final class FiltersDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The possible SendGrid email event types for event forwarding. Specify all the email event types that you would like to forward to the Integration's destination.
     */
    public \SendGridSDK\Collections\Integration\Filters\EmailEventsCollection $email_events;
}
