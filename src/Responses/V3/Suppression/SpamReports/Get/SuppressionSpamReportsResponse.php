<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Suppression\SpamReports\Get;

final class SuppressionSpamReportsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'email',
        'ip',
    ];

    /**
     * A Unix timestamp that indicates when the recipient marked your message as spam.
     */
    public int $created;
    /**
     * The email address of the recipient that marked your message as spam.
     * Format: email
     */
    public string $email;
    /**
     * The IP address that the message was sent from.
     */
    public string $ip;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
