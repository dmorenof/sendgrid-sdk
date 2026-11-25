<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\User;

/**
 * User: Profile
 * Example: {"address":"1451 Larimer Street, 3rd floor","address2":"","city":"Denver, CO","company":"SendGrid","country":"US","first_name":"Matthew","last_name":"Bernier","phone":"7208788003","state":"CO","website":"http://sendgrid.com","zip":"80202"}
 */
final class Profile extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The street address for this user profile.
     */
    public string $address;
    /**
     * An optional second line for the street address of this user profile.
     */
    public string $address2;
    /**
     * The city for the user profile.
     */
    public string $city;
    /**
     * That company that this user profile is associated with.
     */
    public string $company;
    /**
     * Th country of this user profile.
     */
    public string $country;
    /**
     * The first name of the user.
     */
    public string $first_name;
    /**
     * The last name of the user.
     */
    public string $last_name;
    /**
     * The phone number for the user.
     */
    public string $phone;
    /**
     * The state for this user.
     */
    public string $state;
    /**
     * The website associated with this user.
     */
    public string $website;
    /**
     * The zip code for this user.
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
