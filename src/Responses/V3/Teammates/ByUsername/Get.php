<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Teammates\ByUsername;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * (optional) Teammate's address
     */
    public string $address;
    /**
     * (optional) Teammate's address
     */
    public string $address2;
    /**
     * (optional) Teammate's city
     */
    public string $city;
    /**
     * (optional) Teammate's country
     */
    public string $country;
    /**
     * Teammate's email
     */
    public string $email;
    /**
     * Teammate's first name
     */
    public string $first_name;
    /**
     * Set to true if teammate has admin privileges
     */
    public bool $is_admin;
    /**
     * Teammate's last name
     */
    public string $last_name;
    /**
     * (optional) Teammate's phone number
     */
    public string $phone;
    /**
     * Scopes associated to teammate
     *
     * @var list<mixed>
     */
    public array $scopes;
    /**
     * (optional) Teammate's state
     */
    public string $state;
    /**
     * Indicate the type of user: account owner, teammate admin user, or normal teammate
     */
    public \SendGridSDK\Enums\User\Type1 $user_type;
    /**
     * Teammate's username
     */
    public string $username;
    /**
     * (optional) Teammate's website
     */
    public string $website;
    /**
     * (optional) Teammate's zip
     */
    public string $zip;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'address2' => is_string($value) ? $this->address2 = $value : parent::assignMember($name, $value),
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'is_admin' => is_bool($value) ? $this->is_admin = $value : parent::assignMember($name, $value),
            'last_name' => is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'user_type' => is_string($value) ? $this->user_type = \SendGridSDK\Enums\User\Type1::from($value) : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            'website' => is_string($value) ? $this->website = $value : parent::assignMember($name, $value),
            'zip' => is_string($value) ? $this->zip = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
