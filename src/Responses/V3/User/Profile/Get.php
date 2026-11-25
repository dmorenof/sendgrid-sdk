<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\User\Profile;

/**
 * GET User Profile response
 */
final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address',
        'city',
        'company',
        'country',
        'first_name',
        'last_name',
        'phone',
        'state',
        'website',
        'zip',
    ];

    /**
     * The user's address.
     */
    public string $address;
    /**
     * The second line of the user's address.
     */
    public string $address2;
    /**
     * The user's city.
     */
    public string $city;
    /**
     * The name of the user's company.
     */
    public string $company;
    /**
     * The user's country.
     */
    public string $country;
    /**
     * The user's first name.
     */
    public string $first_name;
    /**
     * The user's last name.
     */
    public string $last_name;
    /**
     * The user's phone number.
     */
    public string $phone;
    /**
     * The user's state.
     */
    public string $state;
    /**
     * The user's website URL.
     */
    public string $website;
    /**
     * The user's zip code.
     */
    public string $zip;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'address2' => is_string($value) ? $this->address2 = $value : parent::assignMember($name, $value),
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'company' => is_string($value) ? $this->company = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'last_name' => is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'website' => is_string($value) ? $this->website = $value : parent::assignMember($name, $value),
            'zip' => is_string($value) ? $this->zip = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
