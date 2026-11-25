<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\AccessSettings;

final class Whitelist extends \SendGridSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/access_settings/whitelist',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\AccessSettings\\Whitelist\\Delete',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Remove one or more IPs from the allow list
     *
     * **This endpoint allows you to remove one or more IP addresses from your list of allowed addresses.**
     *
     * To remove one or more IP addresses, pass this endpoint an array containing the ID(s) associated with the IP(s) you intend to remove. You can retrieve the IDs associated with your allowed IP addresses using the "Retrieve a list of currently allowed IPs" endpoint.
     *
     * It is possible to remove your own IP address, which will block access to your account. You will need to submit a [support ticket](https://sendgrid.com/docs/ui/account-and-settings/support/) if this happens. For this reason, it is important to double check that you are removing only the IPs you intend to remove when using this endpoint.
     */
    public function delete(?\SendGridSDK\DeleteParams\V3\AccessSettings\Whitelist $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE), parameters: $params);
        return;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/access_settings/whitelist',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Ip\\AccessManagement2Xx',
    ];

    /**
     * Retrieve a list of currently allowed IPs
     *
     * **This endpoint allows you to retrieve a list of IP addresses that are currently allowed to access your account.**
     *
     * Each IP address returned to you will have `created_at` and `updated_at` dates. Each IP will also be associated with an `id` that can be used to remove the address from your allow list.
     */
    public function get(?\SendGridSDK\GetParams\V3\AccessSettings\Whitelist $params = null): \SendGridSDK\DTOs\Ip\AccessManagement2Xx
    {
        /** @var \SendGridSDK\DTOs\Ip\AccessManagement2Xx $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/access_settings/whitelist',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Ip\\AccessManagement2Xx',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\AccessSettings\\Whitelist\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Add one or more IPs to the allow list
     *
     * **This endpoint allows you to add one or more allowed IP addresses.**
     *
     * To allow one or more IP addresses, pass them to this endpoint in an array. Once an IP address is added to your allow list, it will be assigned an `id` that can be used to remove the address. You can retrieve the ID associated with an IP using the "Retrieve a list of currently allowed IPs" endpoint.
     */
    public function post(?\SendGridSDK\PostParams\V3\AccessSettings\Whitelist $params = null): \SendGridSDK\DTOs\Ip\AccessManagement2Xx
    {
        /** @var \SendGridSDK\DTOs\Ip\AccessManagement2Xx $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_RULE_ID = [
        'method' => 'DELETE',
        'path' => '/v3/access_settings/whitelist/{rule_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
    ];

    /**
     * Remove a specific IP from the allowed list
     *
     * **This endpoint allows you to remove a specific IP address from your list of allowed addresses.**
     *
     * When removing a specific IP address from your list, you must include the ID in your call.  You can retrieve the IDs associated with your allowed IP addresses using the "Retrieve a list of currently allowed IPs" endpoint.
     */
    public function deleteByRuleId(string $rule_id, ?\SendGridSDK\DeleteParams\V3\AccessSettings\Whitelist\ByRuleId $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_RULE_ID), path: ['rule_id' => $rule_id], parameters: $params);
        return;
    }

    private const array GET_BY_RULE_ID = [
        'method' => 'GET',
        'path' => '/v3/access_settings/whitelist/{rule_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Ip\\AccessManagement2Xx',
    ];

    /**
     * Retrieve a specific allowed IP
     *
     * **This endpoint allows you to retreive a specific IP address that has been allowed to access your account.**
     *
     * You must include the ID for the specific IP address you want to retrieve in your call. You can retrieve the IDs associated with your allowed IP addresses using the "Retrieve a  list of currently allowed IPs" endpoint.
     */
    public function getByRuleId(string $rule_id, ?\SendGridSDK\GetParams\V3\AccessSettings\Whitelist\ByRuleId $params = null): \SendGridSDK\DTOs\Ip\AccessManagement2Xx
    {
        /** @var \SendGridSDK\DTOs\Ip\AccessManagement2Xx $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_RULE_ID), path: ['rule_id' => $rule_id], parameters: $params);
        return $result;
    }
}
