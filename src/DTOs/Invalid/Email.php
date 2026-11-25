<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Invalid;

/**
 * Invalid Email
 * Example: {"created":1620141015,"email":"invalid&#64;example.com","reason":"Mail domain mentioned in email address is unknown"}
 */
final class Email extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A Unix timestamp indicating when the email address was added to the invalid emails list.
     */
    public int $created;
    /**
     * The email address that was marked as invalid.
     * Format: email
     */
    public string $email;
    /**
     * The reason that the email address was marked as invalid.
     */
    public string $reason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
