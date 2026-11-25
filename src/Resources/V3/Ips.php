<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3;

final class Ips extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/ips',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Ips\\Get\\IpsCollection',
    ];

    /**
     * Retrieve all IP addresses
     *
     * **This endpoint allows you to retrieve a paginated list of all assigned and unassigned IPs.**
     *
     * Response includes warm up status, pools, assigned subusers, and reverse DNS info. The start_date field corresponds to when warmup started for that IP.
     *
     * A single IP address or a range of IP addresses may be dedicated to an account in order to send email for multiple domains. The reputation of this IP is determined by the aggregate performance of all email traffic sent from it.
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public function get(?\SendGridSDK\GetParams\V3\Ips $params = null): \SendGridSDK\Collections\V3\Ips\Get\IpsCollection
    {
        /** @var \SendGridSDK\Collections\V3\Ips\Get\IpsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/ips',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\IpsErrorResponse',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\IpsErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Ips\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Ips\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Add IPs
     *
     * **This endpoint is for adding a(n) IP Address(es) to your account.**
     */
    public function post(?\SendGridSDK\Requests\V3\Ips\Post $payload = null): \SendGridSDK\Responses\V3\Ips\Post
    {
        /** @var \SendGridSDK\Responses\V3\Ips\Post $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

    private const array GET_BY_IP_ADDRESS = [
        'method' => 'GET',
        'path' => '/v3/ips/{ip_address}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Ips\\ByIpAddress\\Get',
    ];

    /**
     * Retrieve all IP pools an IP address belongs to
     *
     * **This endpoint allows you to see which IP pools a particular IP address has been added to.**
     *
     * The same IP address can be added to multiple IP pools.
     *
     * A single IP address or a range of IP addresses may be dedicated to an account in order to send email for multiple domains. The reputation of this IP is based on the aggregate performance of all the senders who use it.
     */
    public function getByIpAddress(string $ip_address): \SendGridSDK\Responses\V3\Ips\ByIpAddress\Get
    {
        /** @var \SendGridSDK\Responses\V3\Ips\ByIpAddress\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_IP_ADDRESS), path: ['ip_address' => $ip_address]);
        return $result;
    }
}
