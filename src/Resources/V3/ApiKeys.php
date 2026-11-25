<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3;

final class ApiKeys extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/api_keys',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\ApiKeys\\Get',
    ];

    /**
     * Retrieve all API Keys belonging to the authenticated user
     *
     * **This endpoint allows you to retrieve all API Keys that belong to the authenticated user.**
     *
     * A successful response from this API will include all available API keys' names and IDs.
     *
     * For security reasons, there is not a way to retrieve the key itself after it's created. If you lose your API key, you must create a new one. Only the "Create API keys" endpoint will return a key to you and only at the time of creation.
     *
     * An `api_key_id` can be used to update or delete the key, as well as retrieve the key's details, such as its scopes.
     */
    public function get(?\SendGridSDK\GetParams\V3\ApiKeys $params = null): \SendGridSDK\Responses\V3\ApiKeys\Get
    {
        /** @var \SendGridSDK\Responses\V3\ApiKeys\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/api_keys',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            401 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\ApiKeys\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\ApiKeys\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create API keys
     *
     * **This endpoint allows you to create a new API Key for the user.**
     *
     * To create your initial SendGrid API Key, you should [use the SendGrid App](https://app.sendgrid.com/settings/api_keys). Once you have created a first key with scopes to manage additional API keys, you can use this API for all other key management.
     * A JSON request body containing a `name` property is required when making requests to this endpoint. If the number of maximum keys, 100, is reached, a `403` status will be returned.
     * Though the `name` field is required, it does not need to be unique. A unique API key ID will be generated for each key you create and returned in the response body.
     * It is not necessary to pass a `scopes` field to the API when creating a key, but you should be aware that omitting the `scopes` field from your request will create a key with "Full Access" permissions by default.
     * See the [API Key Permissions List](https://docs.sendgrid.com/api-reference/how-to-use-the-sendgrid-v3-api/authorization) for all available scopes. An API key's scopes can be updated after creation using the "Update API keys" endpoint.
     */
    public function post(?\SendGridSDK\PostParams\V3\ApiKeys $params = null): \SendGridSDK\Responses\V3\ApiKeys\Post
    {
        /** @var \SendGridSDK\Responses\V3\ApiKeys\Post $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_API_KEY_ID = [
        'method' => 'DELETE',
        'path' => '/v3/api_keys/{api_key_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            401 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete API keys
     *
     * **This endpoint allows you to revoke an existing API Key using an `api_key_id`**
     *
     * Authentications using a revoked API Key will fail after after some small propogation delay. If the API Key ID does not exist, a `404` status will be returned.
     */
    public function deleteByApiKeyId(string $api_key_id, ?\SendGridSDK\DeleteParams\V3\ApiKeys\ByApiKeyId $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_API_KEY_ID), path: ['api_key_id' => $api_key_id], parameters: $params);
        return;
    }

    private const array GET_BY_API_KEY_ID = [
        'method' => 'GET',
        'path' => '/v3/api_keys/{api_key_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            401 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\ApiKeys\\ByApiKeyId\\Get',
    ];

    /**
     * Retrieve an existing API Key
     *
     * **This endpoint allows you to retrieve a single API key using an `api_key_id`.**
     *
     * The endpoint will return a key's name, ID, and scopes. If the API Key ID does not, exist a `404` status will be returned.
     *
     * See the [API Key Permissions List](https://docs.sendgrid.com/api-reference/how-to-use-the-sendgrid-v3-api/authorization) for all available scopes. An API key's scopes can be updated after creation using the "Update API keys" endpoint.
     */
    public function getByApiKeyId(string $api_key_id, ?\SendGridSDK\GetParams\V3\ApiKeys\ByApiKeyId $params = null): \SendGridSDK\Responses\V3\ApiKeys\ByApiKeyId\Get
    {
        /** @var \SendGridSDK\Responses\V3\ApiKeys\ByApiKeyId\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_API_KEY_ID), path: ['api_key_id' => $api_key_id], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_API_KEY_ID = [
        'method' => 'PATCH',
        'path' => '/v3/api_keys/{api_key_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            401 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Api\\Key\\Response',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\ApiKeys\\ByApiKeyId\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update API key name
     *
     * **This endpoint allows you to update the name of an existing API Key.**
     *
     * You must pass this endpoint a JSON request body with a `name` property, which will be used to rename the key associated with the `api_key_id` passed in the URL.
     */
    public function patchByApiKeyId(string $api_key_id, ?\SendGridSDK\PatchParams\V3\ApiKeys\ByApiKeyId $params = null): \SendGridSDK\DTOs\Api\Key\Response
    {
        /** @var \SendGridSDK\DTOs\Api\Key\Response $result */
        $result = $this->executeArguments(self::operation(self::PATCH_BY_API_KEY_ID), path: ['api_key_id' => $api_key_id], parameters: $params);
        return $result;
    }

    private const array PUT_BY_API_KEY_ID = [
        'method' => 'PUT',
        'path' => '/v3/api_keys/{api_key_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            401 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Api\\KeysError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Api\\Key\\Response',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\ApiKeys\\ByApiKeyId\\Put',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update API key name and scopes
     *
     * **This endpoint allows you to update the name and scopes of a given API key.**
     *
     * You must pass this endpoint a JSON request body with a `name` field and a `scopes` array containing at least one scope. The `name` and `scopes` fields will be used to update the key associated with the `api_key_id` in the request URL.
     *
     * If you need to update a key's scopes only, pass the `name` field with the key's existing name; the `name` will not be modified. If you need to update a key's name only, use the "Update API key name" endpoint.
     *
     * See the [API Key Permissions List](https://docs.sendgrid.com/api-reference/how-to-use-the-sendgrid-v3-api/authorization) for all available scopes.
     */
    public function putByApiKeyId(string $api_key_id, ?\SendGridSDK\PutParams\V3\ApiKeys\ByApiKeyId $params = null): \SendGridSDK\DTOs\Api\Key\Response
    {
        /** @var \SendGridSDK\DTOs\Api\Key\Response $result */
        $result = $this->executeArguments(self::operation(self::PUT_BY_API_KEY_ID), path: ['api_key_id' => $api_key_id], parameters: $params);
        return $result;
    }
}
