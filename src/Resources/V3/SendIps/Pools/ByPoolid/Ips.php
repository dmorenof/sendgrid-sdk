<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\SendIps\Pools\ByPoolid;

final class Ips extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/send_ips/pools/{poolid}/ips',
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
        'responseType' => '\\SendGridSDK\\Responses\\V3\\SendIps\\Pools\\ByPoolid\\Ips\\Get',
    ];

    /**
     * Get IPs Assigned to an IP Pool
     *
     * This operation returns the IP addresses that are assigned to the specified IP pool.
     */
    public function get(string $poolid, ?\SendGridSDK\GetParams\V3\SendIps\Pools\ByPoolid\Ips $params = null): \SendGridSDK\Responses\V3\SendIps\Pools\ByPoolid\Ips\Get
    {
        /** @var \SendGridSDK\Responses\V3\SendIps\Pools\ByPoolid\Ips\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['poolid' => $poolid], parameters: $params);
        return $result;
    }
}
