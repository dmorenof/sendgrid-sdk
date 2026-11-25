<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Post\SsoTeammates\Request;

/**
 * An array of Subusers to which the Teammate should have access.
 */
final class SubuserAccessDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'permission_type',
    ];

    /**
     * Set this property to the ID of a Subuser to which the Teammate should have access. You can retrieve Subuser IDs from the [Subusers API](https://docs.sendgrid.com/api-reference/subusers-api/).
     */
    public int $id;
    /**
     * Grant the level of access the Teammate should have to the specified Subuser with this property. This property value may be either `admin` or `restricted`. When set to `restricted`, the Teammate has only the permissions assigned in the `scopes` property.
     */
    public \SendGridSDK\Enums\PermissionType $permission_type;
    /**
     * Add or remove permissions that the Teammate can access on behalf of the Subuser. See [**Teammate Permissions**](https://docs.sendgrid.com/ui/account-and-settings/teammate-permissions) for a complete list of available scopes. You should not include this property in the request when the `permission_type` property is set to `admin`—administrators have full access to the specified Subuser.
     */
    public \SendGridSDK\Collections\StringCollection $scopes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'permission_type' => is_string($value) ? $this->permission_type = \SendGridSDK\Enums\PermissionType::from($value) : parent::assignMember($name, $value),
            'scopes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->scopes = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
