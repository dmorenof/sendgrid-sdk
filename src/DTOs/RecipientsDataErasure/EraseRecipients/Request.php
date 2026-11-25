<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\RecipientsDataErasure\EraseRecipients;

/**
 * EmailAddress
 * Example: {"email_addresses":["user1&#64;example.com","user2&#64;example.com"]}
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email_addresses',
    ];

    protected const array VALIDATION = [
        'email_addresses' => [
            'minItems' => 1,
            'maxItems' => 5000,
        ],
    ];

    /**
     * List of unique recipient email addresses whose PII will be erased. You may include a maximum of 5,000 addresses or a maximum payload size of 256Kb, whichever comes first.
     */
    public \SendGridSDK\Collections\StringCollection $email_addresses {
        set {
            $this->assigning('email_addresses', $value);
            $this->email_addresses = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email_addresses' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->email_addresses = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
