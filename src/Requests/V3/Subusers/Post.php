<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Subusers;

/**
 * Example: {"username":"John&#64;example.com","email":"John&#64;example.com","password":"johns_password","ips":["1.1.1.1","2.2.2.2"],"region":"global","include_region":true}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email',
        'ips',
        'password',
        'username',
    ];

    /**
     * The email address of the subuser.
     * Format: email
     */
    public string $email;
    /**
     * A flag that determines if the Subuser's region should be returned in the response. (Regional email is in Public Beta and requires SendGrid Pro plan or above.)
     */
    public bool $include_region;
    /**
     * The IP addresses that should be assigned to this subuser.
     */
    public \SendGridSDK\Collections\StringCollection $ips;
    /**
     * The password this subuser will use when logging into SendGrid.
     */
    public string $password;
    /**
     * The region this Subuser should be assigned to. Can be `global` or `eu`. (Regional email is in Public Beta and requires SendGrid Pro plan or above.).
     */
    public \SendGridSDK\Enums\Subusers\Region1 $region;
    /**
     * The username for this subuser.
     */
    public string $username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'include_region' => is_bool($value) ? $this->include_region = $value : parent::assignMember($name, $value),
            'ips' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ips = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'password' => is_string($value) ? $this->password = $value : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = \SendGridSDK\Enums\Subusers\Region1::from($value) : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
