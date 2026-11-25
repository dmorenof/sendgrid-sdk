<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * Single Sign-On Teammates PATCH Response.
 *
 * Successful SSO Teammates PATCH response.
 */
final class PatchSsoTeammates200 extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The Teammate's street address.
     */
    public string $address;
    /**
     * The Teammate's apartment number, suite number, or other secondary address information that is not part of the physical street address.
     */
    public string $address2;
    /**
     * The Teammate's city.
     */
    public string $city;
    /**
     * The Teammate's company name.
     */
    public string $company;
    /**
     * The Teammate's country of residence.
     */
    public string $country;
    /**
     * Teammate's email address. This email address also functions as the Teammate's username and must match the address assigned to the user in your IdP. This address cannot be changed after the Teammate is created.
     * Format: email
     */
    public string $email;
    /**
     * The Teammate's first name.
     */
    public string $first_name;
    /**
     * When this property is set to `true`, the Teammate has permissions to operate only on behalf of a Subuser. This property value is `true` when the `subuser_access` property is not empty. The `subuser_access` property determines which Subusers the Teammate may act on behalf of.
     */
    public bool $has_restricted_subuser_access;
    /**
     * Indicates if the Teammate has administrator permissions. When set to `true`, the Teammate is an admin.
     */
    public bool $is_admin;
    /**
     * Indicates how the Teammate authenticates with SendGrid. When set to `true`, the Teammate will access SendGrid via SSO and their IdP. When set to `false`, the Teammate will authenticate directly with SendGrid via a username and password.
     */
    public bool $is_sso;
    /**
     * The Teammate's last name.
     */
    public string $last_name;
    /**
     * The Teammate's phone number.
     */
    public string $phone;
    /**
     * The permissions or scopes currently assigned to the Teammate. See [**Teammate Permissions**](https://docs.sendgrid.com/ui/account-and-settings/teammate-permissions) for a complete list of available scopes.
     */
    public \SendGridSDK\Collections\StringCollection $scopes;
    /**
     * The Teammate's state or province.
     */
    public string $state;
    /**
     * Specifies which Subusers the Teammate may access and act on behalf of. If this property is populated, the `has_restricted_subuser_access` property will be `true`.
     */
    public \SendGridSDK\Collections\PatchSsoTeammates200\SubuserAccessCollection $subuser_access;
    /**
     * A Teammate can be an `admin`, `owner`, or `teammate`. Each role is associated with the scope of the Teammate's permissions.
     */
    public \SendGridSDK\Enums\User\Type $user_type;
    /**
     * The Teammate's username. This property is set to the Teammate's email address.
     */
    public string $username;
    /**
     * A website associated with the Teammate.
     */
    public string $website;
    /**
     * The Teammate's zip code.
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
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'has_restricted_subuser_access' => is_bool($value) ? $this->has_restricted_subuser_access = $value : parent::assignMember($name, $value),
            'is_admin' => is_bool($value) ? $this->is_admin = $value : parent::assignMember($name, $value),
            'is_sso' => is_bool($value) ? $this->is_sso = $value : parent::assignMember($name, $value),
            'last_name' => is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'scopes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->scopes = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'user_type' => is_string($value) ? $this->user_type = \SendGridSDK\Enums\User\Type::from($value) : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            'website' => is_string($value) ? $this->website = $value : parent::assignMember($name, $value),
            'zip' => is_string($value) ? $this->zip = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
