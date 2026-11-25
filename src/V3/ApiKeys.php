<?php

declare(strict_types=1);

namespace SendGridSDK\V3;

final class ApiKeys extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/api_keys [operationId: ListApiKey] */
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
    public static function get(?\SendGridSDK\GetParams\V3\ApiKeys $params = null): \SendGridSDK\Responses\V3\ApiKeys\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\ApiKeys::class)->get($params);
    }

    /** POST /v3/api_keys [operationId: CreateApiKey] */
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
    public static function post(?\SendGridSDK\PostParams\V3\ApiKeys $params = null): \SendGridSDK\Responses\V3\ApiKeys\Post
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\ApiKeys::class)->post($params);
    }

    /** DELETE /v3/api_keys/{api_key_id} [operationId: DeleteApiKey] */
    /**
     * Delete API keys
     *
     * **This endpoint allows you to revoke an existing API Key using an `api_key_id`**
     *
     * Authentications using a revoked API Key will fail after after some small propogation delay. If the API Key ID does not exist, a `404` status will be returned.
     */
    public static function deleteByApiKeyId(string $api_key_id, ?\SendGridSDK\DeleteParams\V3\ApiKeys\ByApiKeyId $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\ApiKeys::class)->deleteByApiKeyId($api_key_id, $params);
    }

    /** GET /v3/api_keys/{api_key_id} [operationId: GetApiKey] */
    /**
     * Retrieve an existing API Key
     *
     * **This endpoint allows you to retrieve a single API key using an `api_key_id`.**
     *
     * The endpoint will return a key's name, ID, and scopes. If the API Key ID does not, exist a `404` status will be returned.
     *
     * See the [API Key Permissions List](https://docs.sendgrid.com/api-reference/how-to-use-the-sendgrid-v3-api/authorization) for all available scopes. An API key's scopes can be updated after creation using the "Update API keys" endpoint.
     */
    public static function getByApiKeyId(string $api_key_id, ?\SendGridSDK\GetParams\V3\ApiKeys\ByApiKeyId $params = null): \SendGridSDK\Responses\V3\ApiKeys\ByApiKeyId\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\ApiKeys::class)->getByApiKeyId($api_key_id, $params);
    }

    /** PATCH /v3/api_keys/{api_key_id} [operationId: UpdateApiKeyName] */
    /**
     * Update API key name
     *
     * **This endpoint allows you to update the name of an existing API Key.**
     *
     * You must pass this endpoint a JSON request body with a `name` property, which will be used to rename the key associated with the `api_key_id` passed in the URL.
     */
    public static function patchByApiKeyId(string $api_key_id, ?\SendGridSDK\PatchParams\V3\ApiKeys\ByApiKeyId $params = null): \SendGridSDK\DTOs\Api\Key\Response
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\ApiKeys::class)->patchByApiKeyId($api_key_id, $params);
    }

    /** PUT /v3/api_keys/{api_key_id} [operationId: UpdateApiKey] */
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
    public static function putByApiKeyId(string $api_key_id, ?\SendGridSDK\PutParams\V3\ApiKeys\ByApiKeyId $params = null): \SendGridSDK\DTOs\Api\Key\Response
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\ApiKeys::class)->putByApiKeyId($api_key_id, $params);
    }
}
