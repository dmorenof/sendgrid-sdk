<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Whitelabel\Domains;

final class DefaultResource extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/whitelabel/domains/default [operationId: ListDefaultAuthenticatedDomain] */
    /**
     * Get the default authentication
     *
     * **This endpoint allows you to retrieve the default authentication for a domain.**
     *
     * When creating or updating a domain authentication, you can set the domain as a default. The default domain will be used to send all mail. If you have multiple authenticated domains, the authenticated domain matching the domain of the From address will be used, and the default will be overridden.
     *
     * This endpoint will return a default domain and its details only if a default is set. You are not required to set a default. If you do not set a default domain, this endpoint will return general information about your domain authentication status.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Whitelabel\Domains\DefaultResource $params = null): \SendGridSDK\Collections\V3\Whitelabel\Domains\DefaultResource\Get\DomainsDefaultResourceCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Domains\DefaultResource::class)->get($params);
    }
}
