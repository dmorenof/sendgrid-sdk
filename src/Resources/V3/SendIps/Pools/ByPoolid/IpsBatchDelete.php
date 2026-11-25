<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\SendIps\Pools\ByPoolid;

final class IpsBatchDelete extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/send_ips/pools/{poolid}/ips:batchDelete',
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
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\SendIps\\Pools\\ByPoolid\\IpsBatchDelete\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Delete a Batch of IPs from an IP Pool
     *
     * This operation removes a batch of IPs from an IP Pool. All IPs associated with the Pool will be unassigned from the deleted Pool. However, this operation does not remove the IPs from your account.
     */
    public function post(string $poolid, ?\SendGridSDK\Requests\V3\SendIps\Pools\ByPoolid\IpsBatchDelete\Post $payload = null): void
    {
        func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: ['poolid' => $poolid]) : $this->executeArguments(self::operation(self::POST), path: ['poolid' => $poolid]);
        return;
    }
}
