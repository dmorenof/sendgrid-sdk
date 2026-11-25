<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\User;

final class Email extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/user/email',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\User\\Email\\Get',
    ];

    /**
     * Retrieve your account email address
     *
     * **This endpoint allows you to retrieve the email address currently on file for your account.**
     */
    public function get(?\SendGridSDK\GetParams\V3\User\Email $params = null): \SendGridSDK\Responses\V3\User\Email\Get
    {
        /** @var \SendGridSDK\Responses\V3\User\Email\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/user/email',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\User\\Email\\Put',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\User\\Email\\Put',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update your account email address
     *
     * **This endpoint allows you to update the email address currently on file for your account.**
     */
    public function put(?\SendGridSDK\PutParams\V3\User\Email $params = null): \SendGridSDK\Responses\V3\User\Email\Put
    {
        /** @var \SendGridSDK\Responses\V3\User\Email\Put $result */
        $result = $this->executeArguments(self::operation(self::PUT), parameters: $params);
        return $result;
    }
}
