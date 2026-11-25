<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\ReverseDns;

final class UsersDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'user_id',
        'username',
    ];

    /**
     * The ID of a user who can send mail from the IP address.
     */
    public int $user_id;
    /**
     * The username of a user who can send mail from the IP address.
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
