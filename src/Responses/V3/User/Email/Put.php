<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\User\Email;

final class Put extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email',
    ];

    /**
     * The current email address on file for your account.
     * Format: email
     */
    public string $email;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
