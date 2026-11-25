<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Suppression\Unsubscribes\Get;

final class SuppressionUnsubscribesResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'email',
    ];

    /**
     * A Unix timestamp indicating when the recipient was added to the global suppression list.
     */
    public int $created;
    /**
     * The email address of the recipient who is globally suppressed.
     * Format: email
     */
    public string $email;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
