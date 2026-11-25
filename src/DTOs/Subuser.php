<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * List all Subusers for a parent response
 * Example: {"disabled":false,"email":"example&#64;example.com","id":1234,"username":"example_subuser"}
 */
final class Subuser extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'disabled',
        'email',
        'id',
        'username',
    ];

    /**
     * Whether or not the user is enabled or disabled.
     */
    public bool $disabled;
    /**
     * The email address to contact this subuser.
     * Format: email
     */
    public string $email;
    /**
     * The ID of this subuser.
     */
    public float $id;
    /**
     * The region this Subuser is assigned to. This property is returned only if the `include_region` parameter was included and set to `true` in the API request.
     */
    public \SendGridSDK\Enums\Subusers\Region2 $region;
    /**
     * The name by which this subuser will be referred.
     */
    public string $username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'disabled' => is_bool($value) ? $this->disabled = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'id' => is_float($value) ? $this->id = $value : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = \SendGridSDK\Enums\Subusers\Region2::from($value) : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
