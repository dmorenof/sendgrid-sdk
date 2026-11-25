<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\EventWebhook;

final class DateResponseProps extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * An ISO 8601 timestamp in UTC timezone when the Event Webhook was created. If a Webhook's `created_date` is `null`, it is a [legacy Event Webook](https://www.twilio.com/en-us/changelog/event-webhooks), which means it is your oldest Webhook.
     * Format: date-time
     */
    public ?string $created_date;
    /**
     * An ISO 8601 timestamp in UTC timezone when the Event Webhook was last modified.
     * Format: date-time
     */
    public string $updated_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created_date' => $value === null || is_string($value) ? $this->created_date = $value : parent::assignMember($name, $value),
            'updated_date' => is_string($value) ? $this->updated_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
