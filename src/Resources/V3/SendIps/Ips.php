<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\SendIps;

final class Ips extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/send_ips/ips',
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
        'responseType' => '\\SendGridSDK\\Responses\\V3\\SendIps\\Ips\\Get',
    ];

    /**
     * Get a List of all IP Addresses on your Account
     *
     * This operation returns a list of all IP addresses associated with your account. A sample of IP details is returned with each IP, including which Pools the IP is associated with, whether the IP is set to warm up automatically, and when the IP was last updated.
     *
     * ### Limitations
     *
     * The `is_parent_assigned` parameter and `pool` parameter cannot be used at the same time. By definition, an IP cannot be assigned to a Pool if it is not first enabled. You can use either the `before_key` or `after_key` in combination with the `limit` parameter to iterate through paginated results but not both.
     */
    public function get(?\SendGridSDK\GetParams\V3\SendIps\Ips $params = null): \SendGridSDK\Responses\V3\SendIps\Ips\Get
    {
        /** @var \SendGridSDK\Responses\V3\SendIps\Ips\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/send_ips/ips',
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
        'responseType' => '\\SendGridSDK\\Responses\\V3\\SendIps\\Ips\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\SendIps\\Ips\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Add a Twilio SendGrid IP Address
     *
     * This operation adds a Twilio SendGrid IP address to your account. You can also assign up to 100 Subusers to the IP address at creation.
     */
    public function post(?\SendGridSDK\Requests\V3\SendIps\Ips\Post $payload = null): \SendGridSDK\Responses\V3\SendIps\Ips\Post
    {
        /** @var \SendGridSDK\Responses\V3\SendIps\Ips\Post $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

    private const array GET_BY_IP = [
        'method' => 'GET',
        'path' => '/v3/send_ips/ips/{ip}',
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
        'responseType' => '\\SendGridSDK\\Responses\\V3\\SendIps\\Ips\\ByIp\\Get',
    ];

    /**
     * Get Details for an IP Address
     *
     * This operation returns details for a specified IP address. Details include whether the IP is assigned to a parent account, set to warm up automatically, which Pools the IP is associated with, when the IP was added and modified, whether the IP is leased, and whether the IP is enabled. Note that this operation will not return Subuser information associated with the IP. To retrieve Subuser information, use the "Get a List of Subusers Assigned to an IP" endpoint.
     */
    public function getByIp(string $ip, ?\SendGridSDK\GetParams\V3\SendIps\Ips\ByIp $params = null): \SendGridSDK\Responses\V3\SendIps\Ips\ByIp\Get
    {
        /** @var \SendGridSDK\Responses\V3\SendIps\Ips\ByIp\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_IP), path: ['ip' => $ip], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_IP = [
        'method' => 'PATCH',
        'path' => '/v3/send_ips/ips/{ip}',
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
        'responseType' => '\\SendGridSDK\\Responses\\V3\\SendIps\\Ips\\ByIp\\Patch',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\SendIps\\Ips\\ByIp\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update Details for an IP Address
     *
     * This operation updates an IP address's settings, including whether the IP is set to warm up automatically, if the IP is  assigned by a parent account, and whether the IP is enabled or disabled. The request body must include at least one of the `is_auto_warmup`, `is_parent_assigned`, or `is_enabled` fields.
     */
    public function patchByIp(string $ip, ?\SendGridSDK\Requests\V3\SendIps\Ips\ByIp\Patch $payload = null): \SendGridSDK\Responses\V3\SendIps\Ips\ByIp\Patch
    {
        /** @var \SendGridSDK\Responses\V3\SendIps\Ips\ByIp\Patch $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::PATCH_BY_IP), $payload, path: ['ip' => $ip]) : $this->executeArguments(self::operation(self::PATCH_BY_IP), path: ['ip' => $ip]);
        return $result;
    }
}
