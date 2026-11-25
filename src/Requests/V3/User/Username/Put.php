<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\User\Username;

/**
 * Example: {"username":"test_username"}
 */
final class Put extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The new username you would like to use for your account.
     */
    public string $username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
