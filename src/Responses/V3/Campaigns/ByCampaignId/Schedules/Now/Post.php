<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Schedules\Now;

/**
 * Send a Campaign response
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'status',
    ];

    /**
     * Format: int64
     */
    public int $id;
    public string $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
