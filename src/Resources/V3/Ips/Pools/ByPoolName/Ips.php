<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Ips\Pools\ByPoolName;

final class Ips extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/ips/pools/{pool_name}/ips',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            404 => '\\SendGridSDK\\Responses\\Errors\\V3\\Ips\\Pools\\ByPoolName\\Ips\\PostStatus404Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Ips\\Pools\\ByPoolName\\Ips\\PostStatus404Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Ips\\Pools\\ByPoolName\\Ips\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Ips\\Pools\\ByPoolName\\Ips\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Add an IP address to a pool
     *
     * **This endpoint allows you to add an IP address to an IP pool.**
     *
     * You can add the same IP address to multiple pools. It may take up to 60 seconds for your IP address to be added to a pool after your request is made.
     *
     * Before you can add an IP to a pool, you need to activate it in your SendGrid account:
     *
     * 1. Log into your SendGrid account.
     * 1. Navigate to **Settings** and then select **IP Addresses**.
     * 1. Find the IP address you want to activate and then click **Edit**.
     * 1. Check **Allow my account to send mail using this IP address**.
     * 1. Click **Save**.
     *
     * You can retrieve all of your available IP addresses from the "Retrieve all IP addresses" endpoint.
     */
    public function post(string $pool_name, ?\SendGridSDK\Requests\V3\Ips\Pools\ByPoolName\Ips\Post $payload = null): \SendGridSDK\Responses\V3\Ips\Pools\ByPoolName\Ips\Post
    {
        /** @var \SendGridSDK\Responses\V3\Ips\Pools\ByPoolName\Ips\Post $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: ['pool_name' => $pool_name]) : $this->executeArguments(self::operation(self::POST), path: ['pool_name' => $pool_name]);
        return $result;
    }

    private const array DELETE_BY_IP = [
        'method' => 'DELETE',
        'path' => '/v3/ips/pools/{pool_name}/ips/{ip}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            404 => '\\SendGridSDK\\Responses\\Errors\\V3\\Ips\\Pools\\ByPoolName\\Ips\\ByIp\\DeleteStatus404Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Ips\\Pools\\ByPoolName\\Ips\\ByIp\\DeleteStatus404Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Remove an IP address from a pool
     *
     * **This endpoint allows you to remove an IP address from an IP pool.**
     */
    public function deleteByIp(\SendGridSDK\PathParams\V3\Ips\Pools\ByPoolName\Ips\ByIp $identifier): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_IP), path: $identifier);
        return;
    }
}
