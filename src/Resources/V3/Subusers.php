<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3;

final class Subusers extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/subusers',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Subusers\\Get\\SubusersCollection',
    ];

    /**
     * List all Subusers
     *
     * **This endpoint allows you to retrieve a paginated list of all your subusers.**
     *
     * You can use the `username` query parameter to filter the list for specific subusers.
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public function get(?\SendGridSDK\GetParams\V3\Subusers $params = null): \SendGridSDK\Collections\V3\Subusers\Get\SubusersCollection
    {
        /** @var \SendGridSDK\Collections\V3\Subusers\Get\SubusersCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/subusers',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
            401 => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
            403 => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\V3\\Subusers\\PostStatus500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Subusers\\PostStatus500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Subuser\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Subusers\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create Subuser
     *
     * **This endpoint allows you to create a new subuser.**
     */
    public function post(?\SendGridSDK\Requests\V3\Subusers\Post $payload = null): \SendGridSDK\DTOs\Subuser\Post
    {
        /** @var \SendGridSDK\DTOs\Subuser\Post $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

    private const array DELETE_BY_SUBUSER_NAME = [
        'method' => 'DELETE',
        'path' => '/v3/subusers/{subuser_name}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete a subuser
     *
     * **This endpoint allows you to delete a subuser.**
     *
     * This is a permanent action. Once deleted, a subuser cannot be retrieved.
     */
    public function deleteBySubuserName(string $subuser_name): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_SUBUSER_NAME), path: ['subuser_name' => $subuser_name]);
        return;
    }

    private const array PATCH_BY_SUBUSER_NAME = [
        'method' => 'PATCH',
        'path' => '/v3/subusers/{subuser_name}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
            401 => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
            500 => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Subusers\\BySubuserName\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Enable/disable a subuser
     *
     * **This endpoint allows you to enable or disable a subuser.**
     */
    public function patchBySubuserName(string $subuser_name, ?\SendGridSDK\Requests\V3\Subusers\BySubuserName\Patch $payload = null): void
    {
        func_num_args() > 1 ? $this->executeBody(self::operation(self::PATCH_BY_SUBUSER_NAME), $payload, path: ['subuser_name' => $subuser_name]) : $this->executeArguments(self::operation(self::PATCH_BY_SUBUSER_NAME), path: ['subuser_name' => $subuser_name]);
        return;
    }
}
