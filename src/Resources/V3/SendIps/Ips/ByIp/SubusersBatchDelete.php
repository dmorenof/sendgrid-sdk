<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\SendIps\Ips\ByIp;

final class SubusersBatchDelete extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/send_ips/ips/{ip}/subusers:batchDelete',
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
            'type' => '\\SendGridSDK\\Requests\\V3\\SendIps\\Ips\\ByIp\\SubusersBatchDelete\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Delete a Batch of Subusers from an IP
     *
     * This operation removes a batch of Subusers from a specified IP address.
     */
    public function post(string $ip, ?\SendGridSDK\Requests\V3\SendIps\Ips\ByIp\SubusersBatchDelete\Post $payload = null): void
    {
        func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: ['ip' => $ip]) : $this->executeArguments(self::operation(self::POST), path: ['ip' => $ip]);
        return;
    }
}
