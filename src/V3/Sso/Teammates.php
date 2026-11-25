<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Sso;

final class Teammates extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/sso/teammates [operationId: CreateSsoTeammate] */
    /**
     * Create an SSO Teammate.
     *
     * **This endpoint allows you to create an SSO Teammate.**
     *
     * The email address provided for the Teammate will also function as the Teammate's username. Once created, the Teammate's email address cannot be changed.
     *
     * ### Scopes
     *
     * When creating a Teammate, you will assign it permissions or scopes. These scopes determine which actions the Teammate can perform and which features they can access. Scopes are provided with one of three properties passed to this endpoint: `is_admin`, `scopes`, and `persona`.
     *
     * You can make a Teammate an administrator by setting `is_admin` to `true`. Administrators will have all scopes assigned to them. Alternatively, you can assign a `persona` to the teammate, which will assign them a block of permissions commonly required for that type of user. See the "Persona scopes" section of [**Teammate Permissions**](https://docs.sendgrid.com/ui/account-and-settings/teammate-permissions#persona-scopes) for a list of permsissions granted by persona. Lastly, you can assign individual permissions with the `scopes` property. See [**Teammate Permissions**](https://docs.sendgrid.com/ui/account-and-settings/teammate-permissions) for a full list of scopes that can be assigned to a Teammate.
     *
     * ### Subuser access
     *
     * SendGrid Teammates may be assigned access to one or more Subusers. Subusers function like SendGrid sub-accounts with their own resources. See [**Subusers**](https://docs.sendgrid.com/ui/account-and-settings/subusers) for more information.
     *
     * When assigning Subuser access to a Teammate, you may set the `has_restricted_subuser_access` property to `true` to constrain the Teammate so that they can operate only on behalf of the Subusers to which they are assigned. You may further set the level of access the Teammate has to each Subuser with the `subuser_access` property.
     */
    public static function post(?\SendGridSDK\DTOs\Post\SsoTeammates\Request $payload = null): \SendGridSDK\DTOs\Post\SsoTeammates201
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Sso\Teammates::class)->post();
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Sso\Teammates::class)->post($payload);
    }

    /** PATCH /v3/sso/teammates/{username} [operationId: UpdateSsoTeammate] */
    /**
     * Edit an SSO Teammate
     *
     * **This endpoint allows you to modify an existing SSO Teammate.**
     *
     * Only the parent user and Teammates with admin permissions can update another Teammate's permissions.
     *
     * ### Scopes
     *
     * When updating a Teammate, you will assign it permissions or scopes. These scopes determine which actions the Teammate can perform and which features they can access. Scopes are provided with one of three properties passed to this endpoint: `is_admin`, `scopes`, and `persona`.
     *
     * You can make a Teammate an administrator by setting `is_admin` to `true`. Administrators will have all scopes assigned to them. Alternatively, you can assign a `persona` to the teammate, which will assign them a block of permissions commonly required for that type of user. See the "Persona scopes" section of [**Teammate Permissions**](https://docs.sendgrid.com/ui/account-and-settings/teammate-permissions#persona-scopes) for a list of permsissions granted by persona. Lastly, you can assign individual permissions with the `scopes` property. See [**Teammate Permissions**](https://docs.sendgrid.com/ui/account-and-settings/teammate-permissions) for a full list of scopes that can be assigned to a Teammate.
     *
     * ### Subuser access
     *
     * SendGrid Teammates may be assigned access to one or more Subusers. Subusers function like SendGrid sub-accounts with their own resources. See [**Subusers**](https://docs.sendgrid.com/ui/account-and-settings/subusers) for more information.
     *
     * When assigning Subuser access to a Teammate, you may set the `has_restricted_subuser_access` property to `true` to constrain the Teammate so that they can operate only on behalf of the Subusers to which they are assigned. You may further set the level of access the Teammate has to each Subuser with the `subuser_access` property.
     */
    public static function patchByUsername(string $username, ?\SendGridSDK\DTOs\Sso\TeammatesBaseRequestProps $payload = null): \SendGridSDK\DTOs\PatchSsoTeammates200
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Sso\Teammates::class)->patchByUsername($username);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Sso\Teammates::class)->patchByUsername($username, $payload);
    }
}
