<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\User;

final class Account extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/user/account',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\User\\Account\\Get',
    ];

    /**
     * Get a user's account information.
     *
     * **This endpoint allows you to retrieve your user account details.**
     *
     * Your user's account information includes the user's account type and reputation.
     */
    public function get(?\SendGridSDK\GetParams\V3\User\Account $params = null): \SendGridSDK\Responses\V3\User\Account\Get
    {
        /** @var \SendGridSDK\Responses\V3\User\Account\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
