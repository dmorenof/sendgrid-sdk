<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\SendIps\Ips\ByIp;

final class SubusersBatchAdd extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/send_ips/ips/{ip}/subusers:batchAdd',
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
        'responseType' => '\\SendGridSDK\\Responses\\V3\\SendIps\\Ips\\ByIp\\SubusersBatchAdd\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\SendIps\\Ips\\ByIp\\SubusersBatchAdd\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Assign a Batch of Subusers to an IP
     *
     * This operation appends a batch of Subusers to a specified IP address. This endpoint requires all Subuser assignments to succeed. If a Subuser assignment fails, this endpoint will return an error.
     */
    public function post(string $ip, ?\SendGridSDK\Requests\V3\SendIps\Ips\ByIp\SubusersBatchAdd\Post $payload = null): \SendGridSDK\Responses\V3\SendIps\Ips\ByIp\SubusersBatchAdd\Post
    {
        /** @var \SendGridSDK\Responses\V3\SendIps\Ips\ByIp\SubusersBatchAdd\Post $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: ['ip' => $ip]) : $this->executeArguments(self::operation(self::POST), path: ['ip' => $ip]);
        return $result;
    }
}
