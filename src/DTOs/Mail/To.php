<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Mail;

/**
 * To Email Object
 */
final class To extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email',
    ];

    /**
     * An email address to which a message is sent. Email addresses specified in `personalizations` will override addresses set at the message level outside of the `personalizations` object.
     * Format: email
     */
    public string $email;
    /**
     * A name or title associated with the email address such as "Alex".
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
