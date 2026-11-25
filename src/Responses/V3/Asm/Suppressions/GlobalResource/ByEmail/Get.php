<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Asm\Suppressions\GlobalResource\ByEmail;

/**
 * Retrieve a Global Suppression response
 */
final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'recipient_email',
    ];

    /**
     * The email address that is globally suppressed. This will be an empty object if the email address you included in your call is not globally suppressed.
     * Format: email
     */
    public string $recipient_email;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'recipient_email' => is_string($value) ? $this->recipient_email = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
