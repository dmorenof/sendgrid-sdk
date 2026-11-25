<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Teammates\ByUsername;

/**
 * Example: {"scopes":["user.profile.read","user.profile.edit"],"is_admin":false}
 */
final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'is_admin',
        'scopes',
    ];

    /**
     * Set to True if this teammate should be promoted to an admin user. If True, scopes should be an empty array.
     */
    public bool $is_admin;
    /**
     * Provide list of scopes that should be given to teammate. If specifying list of scopes, is_admin should be set to False.
     */
    public \SendGridSDK\Collections\StringCollection $scopes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'is_admin' => is_bool($value) ? $this->is_admin = $value : parent::assignMember($name, $value),
            'scopes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->scopes = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
