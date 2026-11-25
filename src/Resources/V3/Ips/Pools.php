<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Ips;

final class Pools extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/ips/pools',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Ips\\Pools\\Get\\IpsPoolsCollection',
    ];

    /**
     * Retrieve all IP pools
     *
     * **This endpoint allows you to get all of your IP pools.**
     */
    public function get(): \SendGridSDK\Collections\V3\Ips\Pools\Get\IpsPoolsCollection
    {
        /** @var \SendGridSDK\Collections\V3\Ips\Pools\Get\IpsPoolsCollection $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/ips/pools',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Ip\\Pools200',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Ips\\Pools\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create an IP pool
     *
     * **This endpoint allows you to create an IP pool.**
     *
     * Before you can create an IP pool, you need to activate the IP in your SendGrid account:
     *
     * 1. Log into your SendGrid account.
     * 1. Navigate to **Settings** and then select **IP Addresses**.
     * 1. Find the IP address you want to activate and then click **Edit**.
     * 1. Check **Allow my account to send mail using this IP address**.
     * 1. Click **Save**.
     */
    public function post(?\SendGridSDK\Requests\V3\Ips\Pools\Post $payload = null): \SendGridSDK\DTOs\Ip\Pools200
    {
        /** @var \SendGridSDK\DTOs\Ip\Pools200 $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

    private const array DELETE_BY_POOL_NAME = [
        'method' => 'DELETE',
        'path' => '/v3/ips/pools/{pool_name}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            404 => '\\SendGridSDK\\Responses\\Errors\\V3\\Ips\\Pools\\ByPoolName\\DeleteStatus404Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Ips\\Pools\\ByPoolName\\DeleteStatus404Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete an IP pool
     *
     * **This endpoint allows you to delete an IP pool.**
     */
    public function deleteByPoolName(string $pool_name): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_POOL_NAME), path: ['pool_name' => $pool_name]);
        return;
    }

    private const array GET_BY_POOL_NAME = [
        'method' => 'GET',
        'path' => '/v3/ips/pools/{pool_name}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            404 => '\\SendGridSDK\\Responses\\Errors\\V3\\Ips\\Pools\\ByPoolName\\GetStatus404Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Ips\\Pools\\ByPoolName\\GetStatus404Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Ips\\Pools\\ByPoolName\\Get',
    ];

    /**
     * Retrieve all the IPs in a specified pool
     *
     * **This endpoint allows you to get all of the IP addresses that are in a specific IP pool.**
     */
    public function getByPoolName(string $pool_name): \SendGridSDK\Responses\V3\Ips\Pools\ByPoolName\Get
    {
        /** @var \SendGridSDK\Responses\V3\Ips\Pools\ByPoolName\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_POOL_NAME), path: ['pool_name' => $pool_name]);
        return $result;
    }

    private const array PUT_BY_POOL_NAME = [
        'method' => 'PUT',
        'path' => '/v3/ips/pools/{pool_name}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            404 => '\\SendGridSDK\\Responses\\Errors\\V3\\Ips\\Pools\\ByPoolName\\PutStatus404Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Ips\\Pools\\ByPoolName\\PutStatus404Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Ip\\Pools200',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Ips\\Pools\\ByPoolName\\Put',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Rename an IP pool
     *
     * **This endpoint allows you to update the name of an IP pool.**
     */
    public function putByPoolName(string $pool_name, ?\SendGridSDK\Requests\V3\Ips\Pools\ByPoolName\Put $payload = null): \SendGridSDK\DTOs\Ip\Pools200
    {
        /** @var \SendGridSDK\DTOs\Ip\Pools200 $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::PUT_BY_POOL_NAME), $payload, path: ['pool_name' => $pool_name]) : $this->executeArguments(self::operation(self::PUT_BY_POOL_NAME), path: ['pool_name' => $pool_name]);
        return $result;
    }
}
