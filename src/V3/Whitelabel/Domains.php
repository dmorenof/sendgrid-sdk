<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Whitelabel;

final class Domains extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/whitelabel/domains [operationId: ListAuthenticatedDomain] */
    /**
     * List all authenticated domains
     *
     * **This endpoint allows you to retrieve a paginated list of all domains you have authenticated.**
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Whitelabel\Domains $params = null): \SendGridSDK\Collections\V3\Whitelabel\Domains\Get\WhitelabelDomainsCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Domains::class)->get($params);
    }

    /** POST /v3/whitelabel/domains [operationId: AuthenticateDomain] */
    /**
     * Authenticate a domain
     *
     * **This endpoint allows you to authenticate a domain.**
     *
     * If you are authenticating a domain for a subuser, you have two options:
     * 1. Use the "username" parameter. This allows you to authenticate a domain on behalf of your subuser. This means the subuser is able to see and modify the authenticated domain.
     * 2. Use the Association workflow (see Associate Domain section). This allows you to authenticate a domain created by the parent to a subuser. This means the subuser will default to the assigned domain, but will not be able to see or modify that authenticated domain. However, if the subuser authenticates their own domain it will overwrite the assigned domain.
     */
    public static function post(?\SendGridSDK\PostParams\V3\Whitelabel\Domains $params = null): \SendGridSDK\DTOs\AuthenticatedDomain
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Domains::class)->post($params);
    }

    /** DELETE /v3/whitelabel/domains/{domain_id} [operationId: DeleteAuthenticatedDomain] */
    /**
     * Delete an authenticated domain.
     *
     * **This endpoint allows you to delete an authenticated domain.**
     */
    public static function deleteByDomainId(string $domain_id, ?\SendGridSDK\DeleteParams\V3\Whitelabel\Domains\ByDomainId $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Domains::class)->deleteByDomainId($domain_id, $params);
    }

    /** GET /v3/whitelabel/domains/{domain_id} [operationId: GetAuthenticatedDomain] */
    /**
     * Retrieve an authenticated domain
     *
     * **This endpoint allows you to retrieve a specific authenticated domain.**
     */
    public static function getByDomainId(string $domain_id, ?\SendGridSDK\GetParams\V3\Whitelabel\Domains\ByDomainId $params = null): \SendGridSDK\DTOs\AuthenticatedDomain
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Domains::class)->getByDomainId($domain_id, $params);
    }

    /** PATCH /v3/whitelabel/domains/{domain_id} [operationId: UpdateAuthenticatedDomain] */
    /**
     * Update an authenticated domain
     *
     * **This endpoint allows you to update the settings for an authenticated domain.**
     */
    public static function patchByDomainId(string $domain_id, ?\SendGridSDK\PatchParams\V3\Whitelabel\Domains\ByDomainId $params = null): \SendGridSDK\Collections\V3\Whitelabel\Domains\ByDomainId\Patch\DomainsByDomainIdCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Domains::class)->patchByDomainId($domain_id, $params);
    }
}
