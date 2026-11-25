<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Campaigns\ByCampaignId\Schedules;

/**
 * Schedule a Campaign request
 * Example: {"send_at":1489771528}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'send_at',
    ];

    /**
     * The unix timestamp for the date and time you would like your campaign to be sent out.
     */
    public int $send_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'send_at' => is_int($value) ? $this->send_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
