<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\User\Username;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'user_id',
        'username',
    ];

    /**
     * The user ID for your account.
     */
    public int $user_id;
    /**
     * Your account username.
     */
    public string $username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'user_id' => is_int($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
