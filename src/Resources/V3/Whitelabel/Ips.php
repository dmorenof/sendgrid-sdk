<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Whitelabel;

final class Ips extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/whitelabel/ips',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Whitelabel\\Ips\\Get\\WhitelabelIpsCollection',
    ];

    /**
     * Retrieve all reverse DNS records
     *
     * **This endpoint allows you to retrieve a paginated list of all the Reverse DNS records created by this account.**
     *
     * You may include a search key by using the `ip` query string parameter. This enables you to perform a prefix search for a given IP segment (e.g., `?ip="192."`).
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public function get(?\SendGridSDK\GetParams\V3\Whitelabel\Ips $params = null): \SendGridSDK\Collections\V3\Whitelabel\Ips\Get\WhitelabelIpsCollection
    {
        /** @var \SendGridSDK\Collections\V3\Whitelabel\Ips\Get\WhitelabelIpsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/whitelabel/ips',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\ReverseDns',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Whitelabel\\Ips\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Set up reverse DNS
     *
     * **This endpoint allows you to set up reverse DNS.**
     */
    public function post(?\SendGridSDK\PostParams\V3\Whitelabel\Ips $params = null): \SendGridSDK\DTOs\ReverseDns
    {
        /** @var \SendGridSDK\DTOs\ReverseDns $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_ID = [
        'method' => 'DELETE',
        'path' => '/v3/whitelabel/ips/{id}',
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
     * Delete a reverse DNS record
     *
     * **This endpoint allows you to delete a reverse DNS record.**
     *
     * A call to this endpoint will respond with a 204 status code if the deletion was successful.
     *
     * You can retrieve the IDs associated with all your reverse DNS records using the "Retrieve all reverse DNS records" endpoint.
     */
    public function deleteById(string $id, ?\SendGridSDK\DeleteParams\V3\Whitelabel\Ips\ById $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_ID), path: ['id' => $id], parameters: $params);
        return;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v3/whitelabel/ips/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\ReverseDns',
    ];

    /**
     * Retrieve a reverse DNS record
     *
     * **This endpoint allows you to retrieve a reverse DNS record.**
     *
     * You can retrieve the IDs associated with all your reverse DNS records using the "Retrieve all reverse DNS records" endpoint.
     */
    public function getById(string $id, ?\SendGridSDK\GetParams\V3\Whitelabel\Ips\ById $params = null): \SendGridSDK\DTOs\ReverseDns
    {
        /** @var \SendGridSDK\DTOs\ReverseDns $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
