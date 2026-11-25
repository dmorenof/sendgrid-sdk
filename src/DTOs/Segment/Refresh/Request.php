<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Segment\Refresh;

/**
 * segment_refresh_request
 * Example: {"user_time_zone":"America/Chicago"}
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'user_time_zone',
    ];

    /**
     * The user's timezone. The timezone is used to reset the refresh count at midnight in the user's local time. Only [IANA time zone format](https://en.wikipedia.org/wiki/List_of_tz_database_time_zones) is accepted.
     */
    public string $user_time_zone;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'user_time_zone' => is_string($value) ? $this->user_time_zone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
