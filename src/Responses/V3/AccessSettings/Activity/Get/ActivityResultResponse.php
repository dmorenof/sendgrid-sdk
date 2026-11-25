<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\AccessSettings\Activity\Get;

final class ActivityResultResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'allowed',
        'auth_method',
        'first_at',
        'ip',
        'last_at',
        'location',
    ];

    /**
     * Indicates if the IP address was granted access to the account.
     */
    public bool $allowed;
    /**
     * The authentication method used when attempting access.
     */
    public string $auth_method;
    /**
     * A Unix timestamp indicating when the first access attempt was made.
     */
    public int $first_at;
    /**
     * The IP addressed used during the access attempt.
     */
    public string $ip;
    /**
     * A Unix timestamp indicating when the most recent access attempt was made
     */
    public int $last_at;
    /**
     * The geographic location from which the access attempt originated.
     */
    public string $location;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allowed' => is_bool($value) ? $this->allowed = $value : parent::assignMember($name, $value),
            'auth_method' => is_string($value) ? $this->auth_method = $value : parent::assignMember($name, $value),
            'first_at' => is_int($value) ? $this->first_at = $value : parent::assignMember($name, $value),
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'last_at' => is_int($value) ? $this->last_at = $value : parent::assignMember($name, $value),
            'location' => is_string($value) ? $this->location = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
