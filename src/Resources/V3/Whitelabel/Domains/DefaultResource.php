<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Whitelabel\Domains;

final class DefaultResource extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/whitelabel/domains/default',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Whitelabel\\Domains\\DefaultResource\\Get\\DomainsDefaultResourceCollection',
    ];

    /**
     * Get the default authentication
     *
     * **This endpoint allows you to retrieve the default authentication for a domain.**
     *
     * When creating or updating a domain authentication, you can set the domain as a default. The default domain will be used to send all mail. If you have multiple authenticated domains, the authenticated domain matching the domain of the From address will be used, and the default will be overridden.
     *
     * This endpoint will return a default domain and its details only if a default is set. You are not required to set a default. If you do not set a default domain, this endpoint will return general information about your domain authentication status.
     */
    public function get(?\SendGridSDK\GetParams\V3\Whitelabel\Domains\DefaultResource $params = null): \SendGridSDK\Collections\V3\Whitelabel\Domains\DefaultResource\Get\DomainsDefaultResourceCollection
    {
        /** @var \SendGridSDK\Collections\V3\Whitelabel\Domains\DefaultResource\Get\DomainsDefaultResourceCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
