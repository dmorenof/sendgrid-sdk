<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Sso\TeammatesRestrictedSubuserResponseProps;

/**
 * An array of Subusers to which the Teammate has access.
 */
final class SubuserAccessDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates if the Subuser is active for the SendGrid account.
     */
    public bool $disabled;
    /**
     * The email address of a Subuser to which the Teammate has access.
     */
    public string $email;
    /**
     * The ID of a Subuser to which the Teammate has access. You can retrieve Subuser IDs from the [Subusers API](https://docs.sendgrid.com/api-reference/subusers-api/).
     */
    public int $id;
    /**
     * The level of access the Teammate has to the specified Subuser. This property value may be either `admin` or `restricted`. When is property is set to `restricted`, the Teammate has only the permissions assigned in the `scopes` property.
     */
    public \SendGridSDK\Enums\PermissionType1 $permission_type;
    /**
     * The permissions or scopes that the Teammate can access on behalf of the Subuser. See [**Teammate Permissions**](https://docs.sendgrid.com/ui/account-and-settings/teammate-permissions) for a complete list of available scopes.
     */
    public \SendGridSDK\Collections\StringCollection $scopes;
    /**
     * The username of a Subuser to which the Teammate has access.
     */
    public string $username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'disabled' => is_bool($value) ? $this->disabled = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'permission_type' => is_string($value) ? $this->permission_type = \SendGridSDK\Enums\PermissionType1::from($value) : parent::assignMember($name, $value),
            'scopes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->scopes = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
