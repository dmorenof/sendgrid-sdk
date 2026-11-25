<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Mail;

/**
 * From Email Object
 */
final class From extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email',
    ];

    /**
     * The email address from which messages are sent. This address should be a verified sender in your Twilio SendGrid account. Email addresses specified in `personalizations` will override addresses set at the message level outside of the `personalizations` object.
     * Format: email
     */
    public string $email;
    /**
     * A name or title associated with the email address such as "Support" or "Alex".
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
