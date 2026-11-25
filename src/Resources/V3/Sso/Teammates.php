<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Sso;

final class Teammates extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/sso/teammates',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => null,
            401 => null,
            403 => null,
            429 => null,
            500 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Teammates\\TeammatesStatus400Collection',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Teammates\\TeammatesStatus401Collection',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Teammates\\TeammatesStatus403Collection',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Teammates\\TeammatesStatus429Collection',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Teammates\\TeammatesStatus500Collection',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Post\\SsoTeammates201',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Post\\SsoTeammates\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function post(?\SendGridSDK\DTOs\Post\SsoTeammates\Request $payload = null): \SendGridSDK\DTOs\Post\SsoTeammates201
    {
        /** @var \SendGridSDK\DTOs\Post\SsoTeammates201 $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

    private const array PATCH_BY_USERNAME = [
        'method' => 'PATCH',
        'path' => '/v3/sso/teammates/{username}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => null,
            401 => null,
            403 => null,
            429 => null,
            500 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Teammates\\ByUsername\\ByUsernameStatus400Collection',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Teammates\\ByUsername\\ByUsernameStatus401Collection',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Teammates\\ByUsername\\ByUsernameStatus403Collection',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Teammates\\ByUsername\\ByUsernameStatus429Collection',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Teammates\\ByUsername\\ByUsernameStatus500Collection',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\PatchSsoTeammates200',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Sso\\TeammatesBaseRequestProps',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function patchByUsername(string $username, ?\SendGridSDK\DTOs\Sso\TeammatesBaseRequestProps $payload = null): \SendGridSDK\DTOs\PatchSsoTeammates200
    {
        /** @var \SendGridSDK\DTOs\PatchSsoTeammates200 $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::PATCH_BY_USERNAME), $payload, path: ['username' => $username]) : $this->executeArguments(self::operation(self::PATCH_BY_USERNAME), path: ['username' => $username]);
        return $result;
    }
}
