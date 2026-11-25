<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\User;

final class Username extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/user/username',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\User\\Username\\Get',
    ];

    /**
     * Retrieve your username
     *
     * **This endpoint allows you to retrieve your current account username.**
     */
    public function get(?\SendGridSDK\GetParams\V3\User\Username $params = null): \SendGridSDK\Responses\V3\User\Username\Get
    {
        /** @var \SendGridSDK\Responses\V3\User\Username\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/user/username',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\User\\Username\\Put',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\User\\Username\\Put',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update your username
     *
     * **This endpoint allows you to update the username for your account.**
     */
    public function put(?\SendGridSDK\PutParams\V3\User\Username $params = null): \SendGridSDK\Responses\V3\User\Username\Put
    {
        /** @var \SendGridSDK\Responses\V3\User\Username\Put $result */
        $result = $this->executeArguments(self::operation(self::PUT), parameters: $params);
        return $result;
    }
}
