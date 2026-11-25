<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Teammates;

/**
 * Example: {"email":"teammate1&#64;example.com","scopes":["user.profile.read","user.profile.update"],"is_admin":false}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email',
        'is_admin',
        'scopes',
    ];

    protected const array VALIDATION = [
        'email' => [
            'minLength' => 5,
            'maxLength' => 255,
            'pattern' => '^.*@.*\\..*',
        ],
    ];

    /**
     * New teammate's email
     */
    public string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * Set to true if teammate should be an admin user
     */
    public bool $is_admin;
    /**
     * Set to specify list of scopes that teammate should have. Should be empty if teammate is an admin.
     */
    public \SendGridSDK\Collections\StringCollection $scopes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'is_admin' => is_bool($value) ? $this->is_admin = $value : parent::assignMember($name, $value),
            'scopes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->scopes = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
