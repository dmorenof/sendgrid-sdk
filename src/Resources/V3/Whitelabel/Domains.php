<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Whitelabel;

final class Domains extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/whitelabel/domains',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Whitelabel\\Domains\\Get\\WhitelabelDomainsCollection',
    ];

    /**
     * List all authenticated domains
     *
     * **This endpoint allows you to retrieve a paginated list of all domains you have authenticated.**
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public function get(?\SendGridSDK\GetParams\V3\Whitelabel\Domains $params = null): \SendGridSDK\Collections\V3\Whitelabel\Domains\Get\WhitelabelDomainsCollection
    {
        /** @var \SendGridSDK\Collections\V3\Whitelabel\Domains\Get\WhitelabelDomainsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/whitelabel/domains',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\AuthenticatedDomain',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Whitelabel\\Domains\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Authenticate a domain
     *
     * **This endpoint allows you to authenticate a domain.**
     *
     * If you are authenticating a domain for a subuser, you have two options:
     * 1. Use the "username" parameter. This allows you to authenticate a domain on behalf of your subuser. This means the subuser is able to see and modify the authenticated domain.
     * 2. Use the Association workflow (see Associate Domain section). This allows you to authenticate a domain created by the parent to a subuser. This means the subuser will default to the assigned domain, but will not be able to see or modify that authenticated domain. However, if the subuser authenticates their own domain it will overwrite the assigned domain.
     */
    public function post(?\SendGridSDK\PostParams\V3\Whitelabel\Domains $params = null): \SendGridSDK\DTOs\AuthenticatedDomain
    {
        /** @var \SendGridSDK\DTOs\AuthenticatedDomain $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_DOMAIN_ID = [
        'method' => 'DELETE',
        'path' => '/v3/whitelabel/domains/{domain_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
    ];

    /**
     * Delete an authenticated domain.
     *
     * **This endpoint allows you to delete an authenticated domain.**
     */
    public function deleteByDomainId(string $domain_id, ?\SendGridSDK\DeleteParams\V3\Whitelabel\Domains\ByDomainId $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_DOMAIN_ID), path: ['domain_id' => $domain_id], parameters: $params);
        return;
    }

    private const array GET_BY_DOMAIN_ID = [
        'method' => 'GET',
        'path' => '/v3/whitelabel/domains/{domain_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\AuthenticatedDomain',
    ];

    /**
     * Retrieve an authenticated domain
     *
     * **This endpoint allows you to retrieve a specific authenticated domain.**
     */
    public function getByDomainId(string $domain_id, ?\SendGridSDK\GetParams\V3\Whitelabel\Domains\ByDomainId $params = null): \SendGridSDK\DTOs\AuthenticatedDomain
    {
        /** @var \SendGridSDK\DTOs\AuthenticatedDomain $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_DOMAIN_ID), path: ['domain_id' => $domain_id], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_DOMAIN_ID = [
        'method' => 'PATCH',
        'path' => '/v3/whitelabel/domains/{domain_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Whitelabel\\Domains\\ByDomainId\\Patch\\DomainsByDomainIdCollection',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Whitelabel\\Domains\\ByDomainId\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update an authenticated domain
     *
     * **This endpoint allows you to update the settings for an authenticated domain.**
     */
    public function patchByDomainId(string $domain_id, ?\SendGridSDK\PatchParams\V3\Whitelabel\Domains\ByDomainId $params = null): \SendGridSDK\Collections\V3\Whitelabel\Domains\ByDomainId\Patch\DomainsByDomainIdCollection
    {
        /** @var \SendGridSDK\Collections\V3\Whitelabel\Domains\ByDomainId\Patch\DomainsByDomainIdCollection $result */
        $result = $this->executeArguments(self::operation(self::PATCH_BY_DOMAIN_ID), path: ['domain_id' => $domain_id], parameters: $params);
        return $result;
    }
}
