<?php

declare(strict_types=1);

namespace SendGridSDK\V3\User\Webhooks\Security;

final class Policies extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/user/webhooks/security/policies [operationId: ListAllSecurityPolicies] */
    /**
     * Retrieve all webhook security policies for your account
     *
     * Returns a list of all webhook security policies configured for your account, including their IDs, names, and security configurations.
     */
    public static function get(?\SendGridSDK\GetParams\V3\User\Webhooks\Security\Policies $params = null): \SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\Webhooks\Security\Policies::class)->get($params);
    }

    /** POST /v3/user/webhooks/security/policies [operationId: CreateSecurityPolicy] */
    /**
     * Create a new webhook security policy
     *
     * Create a new webhook security policy. Note: One of signature or oauth must be given to have a valid security policy.
     *
     */
    public static function post(?\SendGridSDK\PostParams\V3\User\Webhooks\Security\Policies $params = null): \SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\Post
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\Webhooks\Security\Policies::class)->post($params);
    }

    /** DELETE /v3/user/webhooks/security/policies/{id} [operationId: DeleteSecurityPolicy] */
    /**
     * Delete a specific webhook security policy
     *
     * Permanently delete a webhook security policy by its ID.
     */
    public static function deleteById(string $id, ?\SendGridSDK\DeleteParams\V3\User\Webhooks\Security\Policies\ById $params = null): \SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\ById\Delete
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\Webhooks\Security\Policies::class)->deleteById($id, $params);
    }

    /** GET /v3/user/webhooks/security/policies/{id} [operationId: GetSecurityPolicy] */
    /**
     * Retrieve a specific webhook security policy
     *
     * Retrieve the details of a specific webhook security policy by its ID.
     */
    public static function getById(string $id, ?\SendGridSDK\GetParams\V3\User\Webhooks\Security\Policies\ById $params = null): \SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\ById\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\Webhooks\Security\Policies::class)->getById($id, $params);
    }

    /** PATCH /v3/user/webhooks/security/policies/{id} [operationId: UpdateSecurityPolicy] */
    /**
     * Update an existing webhook security policy
     *
     * Update an existing webhook security policy with new configuration values.
     */
    public static function patchById(string $id, ?\SendGridSDK\PatchParams\V3\User\Webhooks\Security\Policies\ById $params = null): \SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\ById\Patch
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\Webhooks\Security\Policies::class)->patchById($id, $params);
    }
}
