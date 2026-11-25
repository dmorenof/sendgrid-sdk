<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Singlesend;

/**
 * singlesend-schedule
 */
final class Schedule extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'send_at',
    ];

    /**
     * The ISO 8601 time at which to send the Single Send. This must be in future or the string `now`. SendGrid [Mail Send](https://docs.sendgrid.com/api-reference/mail-send/mail-send) emails can be scheduled up to 72 hours in advance. However, this scheduling constraint does not apply to emails sent via [Marketing Campaigns](https://docs.sendgrid.com/ui/sending-email/how-to-send-email-with-marketing-campaigns/).
     * Format: date-time
     */
    public string $send_at;
    public \SendGridSDK\Enums\Mc\SinglesendsStatus1 $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'send_at' => is_string($value) ? $this->send_at = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \SendGridSDK\Enums\Mc\SinglesendsStatus1::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
