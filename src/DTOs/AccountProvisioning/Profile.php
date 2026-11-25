<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AccountProvisioning;

/**
 * Profile
 * Example: {"first_name":"Sender","last_name":"Wiz","company_name":"Example Co","company_website":"https://example.com","email":"mail&#64;example.com","timezone":"Asia/Tokyo"}
 */
final class Profile extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Company name of the account holder
     */
    public string $company_name;
    /**
     * Company website of the account holder
     */
    public string $company_website;
    /**
     * Email of the account holder
     */
    public string $email;
    /**
     * First name of the account holder
     */
    public string $first_name;
    /**
     * Last name of the account holder
     */
    public string $last_name;
    /**
     * Phone number with a maximum of fifteen digits formatted using the E.164 standard consisting of [+] [country code] [subscriber number including area code]
     */
    public string $phone;
    /**
     * Area/Location as listed in the [IANA Time Zone database](https://www.iana.org/time-zones)
     */
    public string $timezone;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'company_name' => is_string($value) ? $this->company_name = $value : parent::assignMember($name, $value),
            'company_website' => is_string($value) ? $this->company_website = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'last_name' => is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'timezone' => is_string($value) ? $this->timezone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
