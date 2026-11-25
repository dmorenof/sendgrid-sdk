<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Campaigns\ByCampaignId\Schedules\Test;

/**
 * Example: {"to":"your.email&#64;example.com"}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'to',
    ];

    /**
     * The email address that should receive the test campaign.
     * Format: email
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
