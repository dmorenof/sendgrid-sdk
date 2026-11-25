<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Subusers\BySubuserName;

final class Ips extends \SendGridSDK\Client
{
    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/subusers/{subuser_name}/ips',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Subusers\\BySubuserName\\Ips\\Put',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Collections\\StringCollection',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update IPs assigned to a subuser
     *
     * **This endpoint allows you update your subusers' assigned IP.**
     *
     * Each subuser should be assigned to an IP address from which all of this subuser's mail will be sent. Often, this is the same IP as the parent account, but each subuser can have one or more of their own IP addresses as well.
     *
     * More information:
     *
     * * [How to request more IPs](https://sendgrid.com/docs/ui/account-and-settings/dedicated-ip-addresses/)
     * * [Setup Reverse DNS](https://sendgrid.com/docs/ui/account-and-settings/how-to-set-up-reverse-dns/)
     */
    public function put(string $subuser_name, ?\SendGridSDK\Collections\StringCollection $payload = null): \SendGridSDK\Responses\V3\Subusers\BySubuserName\Ips\Put
    {
        /** @var \SendGridSDK\Responses\V3\Subusers\BySubuserName\Ips\Put $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::PUT), $payload, path: ['subuser_name' => $subuser_name]) : $this->executeArguments(self::operation(self::PUT), path: ['subuser_name' => $subuser_name]);
        return $result;
    }
}
