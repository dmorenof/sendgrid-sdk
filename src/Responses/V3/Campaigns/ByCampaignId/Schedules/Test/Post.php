<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Schedules\Test;

/**
 * Send a Test Campaign request
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'to',
    ];

    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
