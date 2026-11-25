<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\SendIps;

final class Pools extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/send_ips/pools',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
            401 => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
            500 => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\SendIps\\Pools\\Get',
    ];

    /**
     * GET all IP Pools that have Associated IPs
     *
     * This operation returns a list of your IP Pools and a sample of each Pools' associated IP addresses.
     *
     * A maximum of 10 IPs will be returned per IP Pool by default. To retrieve additional IP addresses associated with a Pool, use the "Get IPs Assigned to an IP Pool" operation. Each user may have a maximum of 100 IP Pools.
     */
    public function get(?\SendGridSDK\GetParams\V3\SendIps\Pools $params = null): \SendGridSDK\Responses\V3\SendIps\Pools\Get
    {
        /** @var \SendGridSDK\Responses\V3\SendIps\Pools\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/send_ips/pools',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
            401 => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
            500 => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\SendIps\\Pools\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\SendIps\\Pools\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create an IP Pool with a Name and IP Assignments
     *
     * This operation will create a named IP Pool and associate specified IP addresses with the newly created Pool. This operation requires all IP assignments to succeed. If any IP assignments fail, this endpoint will return an error and the Pool will not be created.
     *
     * Each IP Pool may have a maximum of 100 assigned IP addresses.
     */
    public function post(?\SendGridSDK\Requests\V3\SendIps\Pools\Post $payload = null): \SendGridSDK\Responses\V3\SendIps\Pools\Post
    {
        /** @var \SendGridSDK\Responses\V3\SendIps\Pools\Post $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

    private const array DELETE_BY_POOLID = [
        'method' => 'DELETE',
        'path' => '/v3/send_ips/pools/{poolid}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
            401 => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
            500 => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete IP Pool
     *
     * This operation deletes an IP Pool and unassigns all IP addresses associated with the Pool. IP addresses associated with the deleted Pool will remain in your account.
     */
    public function deleteByPoolid(string $poolid): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_POOLID), path: ['poolid' => $poolid]);
        return;
    }

    private const array GET_BY_POOLID = [
        'method' => 'GET',
        'path' => '/v3/send_ips/pools/{poolid}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
            401 => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
            500 => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\SendIps\\Pools\\ByPoolid\\Get',
    ];

    /**
     * Get Details for an IP Pool
     *
     * This operation will return the details for a specified IP Pool, including the Pool's name, ID, a sample list of the IPs associated with the Pool, and the total number of IPs belonging to the Pool.
     *
     * A maximum of 10 IPs will be returned per IP Pool by default. To retrieve additional IP addresses associated with a Pool, use the "Get IPs Assigned to an IP Pool" operation.
     */
    public function getByPoolid(string $poolid, ?\SendGridSDK\GetParams\V3\SendIps\Pools\ByPoolid $params = null): \SendGridSDK\Responses\V3\SendIps\Pools\ByPoolid\Get
    {
        /** @var \SendGridSDK\Responses\V3\SendIps\Pools\ByPoolid\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_POOLID), path: ['poolid' => $poolid], parameters: $params);
        return $result;
    }

    private const array PUT_BY_POOLID = [
        'method' => 'PUT',
        'path' => '/v3/send_ips/pools/{poolid}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
            401 => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
            500 => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AddressManagementError\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\SendIps\\Pools\\ByPoolid\\Put',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\SendIps\\Pools\\ByPoolid\\Put',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update an IP Pool Name
     *
     * This operation will rename an IP Pool. An IP Pool name cannot start with a dot/period (.) or space.
     */
    public function putByPoolid(string $poolid, ?\SendGridSDK\Requests\V3\SendIps\Pools\ByPoolid\Put $payload = null): \SendGridSDK\Responses\V3\SendIps\Pools\ByPoolid\Put
    {
        /** @var \SendGridSDK\Responses\V3\SendIps\Pools\ByPoolid\Put $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::PUT_BY_POOLID), $payload, path: ['poolid' => $poolid]) : $this->executeArguments(self::operation(self::PUT_BY_POOLID), path: ['poolid' => $poolid]);
        return $result;
    }
}
