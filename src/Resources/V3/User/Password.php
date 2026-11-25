<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\User;

final class Password extends \SendGridSDK\Client
{
    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/user/password',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\User\\Password\\Put',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\User\\Password\\Put',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update your password
     *
     * **This endpoint allows you to update your password.**
     */
    public function put(?\SendGridSDK\PutParams\V3\User\Password $params = null): \SendGridSDK\Responses\V3\User\Password\Put
    {
        /** @var \SendGridSDK\Responses\V3\User\Password\Put $result */
        $result = $this->executeArguments(self::operation(self::PUT), parameters: $params);
        return $result;
    }
}
