<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3;

final class Teammates extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/teammates',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Teammates\\Get',
    ];

    /**
     * Retrieve all teammates
     *
     * **This endpoint allows you to retrieve a paginated list of all current Teammates.**
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public function get(?\SendGridSDK\GetParams\V3\Teammates $params = null): \SendGridSDK\Responses\V3\Teammates\Get
    {
        /** @var \SendGridSDK\Responses\V3\Teammates\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/teammates',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant8Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant8Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Teammates\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Teammates\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Invite teammate
     *
     * **This endpoint allows you to invite a Teammate to your account via email.**
     *
     * You can set a Teammate's initial permissions using the `scopes` array in the request body. Teammate's will receive a minimum set of scopes from Twilio SendGrid that are necessary for the Teammate to function.
     *
     * **Note:** A teammate invite will expire after 7 days, but you may resend the invitation at any time to reset the expiration date.
     */
    public function post(?\SendGridSDK\PostParams\V3\Teammates $params = null): \SendGridSDK\Responses\V3\Teammates\Post
    {
        /** @var \SendGridSDK\Responses\V3\Teammates\Post $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_USERNAME = [
        'method' => 'DELETE',
        'path' => '/v3/teammates/{username}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant7Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant7Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete teammate
     *
     * **This endpoint allows you to delete a teammate.**
     *
     * **Only the parent user or an admin teammate can delete another teammate.**
     */
    public function deleteByUsername(string $username, ?\SendGridSDK\DeleteParams\V3\Teammates\ByUsername $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_USERNAME), path: ['username' => $username], parameters: $params);
        return;
    }

    private const array GET_BY_USERNAME = [
        'method' => 'GET',
        'path' => '/v3/teammates/{username}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Teammates\\ByUsername\\Get',
    ];

    /**
     * Retrieve specific teammate
     *
     * **This endpoint allows you to retrieve a specific Teammate by username.**
     *
     * You can retrieve the username's for each of your Teammates using the "Retrieve all Teammates" endpoint.
     */
    public function getByUsername(string $username, ?\SendGridSDK\GetParams\V3\Teammates\ByUsername $params = null): \SendGridSDK\Responses\V3\Teammates\ByUsername\Get
    {
        /** @var \SendGridSDK\Responses\V3\Teammates\ByUsername\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_USERNAME), path: ['username' => $username], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_USERNAME = [
        'method' => 'PATCH',
        'path' => '/v3/teammates/{username}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant8Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant7Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant8Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant7Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Teammates\\ByUsername\\Patch',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Teammates\\ByUsername\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update teammate's permissions
     *
     * **This endpoint allows you to update a teammate’s permissions.**
     *
     * To turn a teammate into an admin, the request body should contain an `is_admin` set to `true`. Otherwise, set `is_admin` to `false` and pass in all the scopes that a teammate should have.
     *
     * **Only the parent user or other admin teammates can update another teammate’s permissions.**
     *
     * **Admin users can only update permissions.**
     */
    public function patchByUsername(string $username, ?\SendGridSDK\PatchParams\V3\Teammates\ByUsername $params = null): \SendGridSDK\Responses\V3\Teammates\ByUsername\Patch
    {
        /** @var \SendGridSDK\Responses\V3\Teammates\ByUsername\Patch $result */
        $result = $this->executeArguments(self::operation(self::PATCH_BY_USERNAME), path: ['username' => $username], parameters: $params);
        return $result;
    }
}
