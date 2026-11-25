<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Schedules;

/**
 * View Scheduled Time of a Campaign response
 */
final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'send_at',
    ];

    /**
     * Format: int64
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
