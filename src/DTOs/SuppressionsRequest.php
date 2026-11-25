<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * Suppressions Request Body
 * Example: {"recipient_emails":["test1&#64;example.com","test2&#64;example.com"]}
 */
final class SuppressionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'recipient_emails',
    ];

    /**
     * The array of email addresses to add or find.
     */
    public \SendGridSDK\Collections\StringCollection $recipient_emails;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'recipient_emails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->recipient_emails = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
