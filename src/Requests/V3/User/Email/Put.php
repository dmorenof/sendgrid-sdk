<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\User\Email;

/**
 * Example: {"email":"example&#64;example.com"}
 */
final class Put extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The new email address that you would like to use for your account.
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
