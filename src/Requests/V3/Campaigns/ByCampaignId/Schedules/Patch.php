<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Campaigns\ByCampaignId\Schedules;

/**
 * Update a Scheduled Campaign request
 * Example: {"send_at":1489451436}
 */
final class Patch extends \Dmorenof\SdkRuntime\DTO
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
