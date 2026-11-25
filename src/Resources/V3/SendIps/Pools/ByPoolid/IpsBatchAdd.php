<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\SendIps\Pools\ByPoolid;

final class IpsBatchAdd extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/send_ips/pools/{poolid}/ips:batchAdd',
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
        'responseType' => '\\SendGridSDK\\Responses\\V3\\SendIps\\Pools\\ByPoolid\\IpsBatchAdd\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\SendIps\\Pools\\ByPoolid\\IpsBatchAdd\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Add a Batch of IPs to an IP Pool
     *
     * This operation appends a batch of IPs to an IP Pool. This operation requires all IP assignments to succeed. If any IP assignments fail, this endpoint will return an error.
     */
    public function post(string $poolid, ?\SendGridSDK\Requests\V3\SendIps\Pools\ByPoolid\IpsBatchAdd\Post $payload = null): \SendGridSDK\Responses\V3\SendIps\Pools\ByPoolid\IpsBatchAdd\Post
    {
        /** @var \SendGridSDK\Responses\V3\SendIps\Pools\ByPoolid\IpsBatchAdd\Post $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: ['poolid' => $poolid]) : $this->executeArguments(self::operation(self::POST), path: ['poolid' => $poolid]);
        return $result;
    }
}
