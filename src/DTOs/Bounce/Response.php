<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Bounce;

/**
 * Bounce Response
 * Example: {"created":1250337600,"email":"example&#64;example.com","reason":"550 5.1.1 The email account that you tried to reach does not exist. Please try double-checking the recipient's email address for typos or unnecessary spaces. Learn more at  https://support.google.com/mail/answer/6596 o186si2389584ioe.63 - gsmtp ","status":"5.1.1"}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The unix timestamp for when the bounce record was created at SendGrid.
     */
    public float $created;
    /**
     * The email address that was added to the bounce list.
     * Format: email
     */
    public string $email;
    /**
     * The reason for the bounce. This typically will be a bounce code, an enhanced code, and a description.
     */
    public string $reason;
    /**
     * Enhanced SMTP bounce response
     */
    public string $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_float($value) ? $this->created = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
