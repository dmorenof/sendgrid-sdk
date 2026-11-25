<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Subuser;

/**
 * Subuser::POST
 * Example: {"username":"example_subuser","user_id":1234,"email":"example&#64;example.com","credit_allocation":{"type":"unlimited"},"region":"global"}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email',
        'user_id',
        'username',
    ];

    public \SendGridSDK\DTOs\Subuser\Post\CreditAllocationDTO $credit_allocation;
    /**
     * The email address for this subuser.
     * Format: email
     */
    public string $email;
    /**
     * The region this Subuser is assigned to. The property is returned only if the `include_region` parameter is included and set to `true` in the API request.
     */
    public \SendGridSDK\Enums\Subusers\Region3 $region;
    /**
     * The user ID for this subuser.
     */
    public float $user_id;
    /**
     * The username of the subuser.
     */
    public string $username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = \SendGridSDK\Enums\Subusers\Region3::from($value) : parent::assignMember($name, $value),
            'user_id' => is_float($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
