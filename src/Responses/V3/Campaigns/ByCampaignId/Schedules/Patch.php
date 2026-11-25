<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Schedules;

/**
 * Update a Scheduled Campaign response
 */
final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'send_at',
        'status',
    ];

    /**
     * The campaign ID
     */
    public int $id;
    /**
     * The unix timestamp to send the campaign.
     */
    public int $send_at;
    /**
     * The status of the schedule.
     */
    public string $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'send_at' => is_int($value) ? $this->send_at = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
