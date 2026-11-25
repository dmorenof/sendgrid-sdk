<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\User\Password;

/**
 * Example: {"new_password":"new_password","old_password":"old_password"}
 */
final class Put extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'new_password',
        'old_password',
    ];

    /**
     * The new password you would like to use for your account.
     */
    public string $new_password;
    /**
     * The old password for your account.
     */
    public string $old_password;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'new_password' => is_string($value) ? $this->new_password = $value : parent::assignMember($name, $value),
            'old_password' => is_string($value) ? $this->old_password = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
