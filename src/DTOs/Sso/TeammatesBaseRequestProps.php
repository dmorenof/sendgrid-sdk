<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Sso;

final class TeammatesBaseRequestProps extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'first_name',
        'last_name',
    ];

    /**
     * Set this property to the Teammate's first name.
     */
    public string $first_name;
    /**
     * Set this property to `true` to give the Teammate permissions to operate only on behalf of a Subuser. This property value must be `true` if the `subuser_access` property is not empty. The `subuser_access` property determines which Subusers the Teammate may act on behalf of. If this property is set to `true`, you cannot specify individual `scopes`, assign a `persona`, or set `is_admin` to `true`—a Teammate cannot specify scopes for the parent account and have restricted Subuser access.
     */
    public bool $has_restricted_subuser_access;
    /**
     * Set this property to `true` if the Teammate has admin permissions. You should not include the `scopes` or `persona` properties when setting the `is_admin` property to `true`—an admin will be allocated all scopes. See [**Teammate Permissions**](https://docs.sendgrid.com/ui/account-and-settings/teammate-permissions) for a complete list of scopes.
     */
    public bool $is_admin;
    /**
     * Set this property to the Teammate's last name.
     */
    public string $last_name;
    /**
     * A persona represents a group of permissions often required by a type of Teammate such as a developer or marketer. Assigning a persona allows you to allocate a group of pre-defined permissions rather than assigning each scope individually. See [**Teammate Permissions**](https://docs.sendgrid.com/ui/account-and-settings/teammate-permissions) for a full list of the scopes assigned to each persona.
     */
    public \SendGridSDK\Enums\Persona $persona;
    /**
     * Add or remove permissions from a Teammate using this `scopes` property. See [**Teammate Permissions**](https://docs.sendgrid.com/ui/account-and-settings/teammate-permissions) for a complete list of available scopes. You should not include this propety in the request when using the `persona` property or when setting the `is_admin` property to `true`—assigning a `persona` or setting `is_admin` to `true` will allocate a group of permissions to the Teammate.
     */
    public \SendGridSDK\Collections\StringCollection $scopes;
    /**
     * Specify which Subusers the Teammate may access and act on behalf of with this property. If this property is populated, you must set the `has_restricted_subuser_access` property to `true`.
     */
    public \SendGridSDK\Collections\Sso\TeammatesBaseRequestProps\SubuserAccessCollection $subuser_access;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'has_restricted_subuser_access' => is_bool($value) ? $this->has_restricted_subuser_access = $value : parent::assignMember($name, $value),
            'is_admin' => is_bool($value) ? $this->is_admin = $value : parent::assignMember($name, $value),
            'last_name' => is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'persona' => is_string($value) ? $this->persona = \SendGridSDK\Enums\Persona::from($value) : parent::assignMember($name, $value),
            'scopes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->scopes = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
