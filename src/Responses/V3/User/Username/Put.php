<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\User\Username;

final class Put extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'username',
    ];

    /**
     * The current username on file for your account.
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
