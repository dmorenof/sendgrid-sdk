<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Ips;

final class Warmup extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/ips/warmup',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Ips\\Warmup\\Get\\IpsWarmupCollection',
    ];

    /**
     * Retrieve all IPs currently in warmup
     *
     * **This endpoint allows you to retrieve all of your IP addresses that are currently warming up.**
     */
    public function get(): \SendGridSDK\Collections\V3\Ips\Warmup\Get\IpsWarmupCollection
    {
        /** @var \SendGridSDK\Collections\V3\Ips\Warmup\Get\IpsWarmupCollection $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/ips/warmup',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            404 => '\\SendGridSDK\\Responses\\Errors\\V3\\Ips\\Warmup\\PostStatus404Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Ips\\Warmup\\PostStatus404Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Ips\\Warmup\\Post\\IpsWarmupCollection',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Ips\\Warmup\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Start warming up an IP address
     *
     * **This endpoint allows you to put an IP address into warmup mode.**
     */
    public function post(?\SendGridSDK\Requests\V3\Ips\Warmup\Post $payload = null): \SendGridSDK\Collections\V3\Ips\Warmup\Post\IpsWarmupCollection
    {
        /** @var \SendGridSDK\Collections\V3\Ips\Warmup\Post\IpsWarmupCollection $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

    private const array DELETE_BY_IP_ADDRESS = [
        'method' => 'DELETE',
        'path' => '/v3/ips/warmup/{ip_address}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            404 => '\\SendGridSDK\\Responses\\Errors\\V3\\Ips\\Warmup\\ByIpAddress\\DeleteStatus404Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Ips\\Warmup\\ByIpAddress\\DeleteStatus404Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Stop warming up an IP address
     *
     * **This endpoint allows you to remove an IP address from warmup mode.**
     *
     * Your request will return a 204 status code if the specified IP was successfully removed from warmup mode. To retrieve details of the IP’s warmup status *before* removing it from warmup mode, call the  "Retrieve the warmpup status for a specific IP address" endpoint.
     */
    public function deleteByIpAddress(string $ip_address): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_IP_ADDRESS), path: ['ip_address' => $ip_address]);
        return;
    }

    private const array GET_BY_IP_ADDRESS = [
        'method' => 'GET',
        'path' => '/v3/ips/warmup/{ip_address}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            404 => '\\SendGridSDK\\Responses\\Errors\\V3\\Ips\\Warmup\\ByIpAddress\\GetStatus404Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Ips\\Warmup\\ByIpAddress\\GetStatus404Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Ips\\Warmup\\ByIpAddress\\Get\\WarmupByIpAddressCollection',
    ];

    /**
     * Retrieve the warmup status for a specific IP address
     *
     * **This endpoint allows you to retrieve the warmup status for a specific IP address.**
     *
     * You can retrieve all of your warming IPs using the "Retrieve all IPs currently in warmup" endpoint.
     */
    public function getByIpAddress(string $ip_address): \SendGridSDK\Collections\V3\Ips\Warmup\ByIpAddress\Get\WarmupByIpAddressCollection
    {
        /** @var \SendGridSDK\Collections\V3\Ips\Warmup\ByIpAddress\Get\WarmupByIpAddressCollection $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_IP_ADDRESS), path: ['ip_address' => $ip_address]);
        return $result;
    }
}
