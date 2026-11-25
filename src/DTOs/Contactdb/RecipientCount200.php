<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Contactdb;

/**
 * ContactDB: Recipient Count
 * Example: {"recipient_count":1234}
 */
final class RecipientCount200 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'recipient_count',
    ];

    /**
     * The count of recipients.
     */
    public float $recipient_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'recipient_count' => is_float($value) ? $this->recipient_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
