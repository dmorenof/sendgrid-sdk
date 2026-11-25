<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\User;

final class Credits extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/user/credits',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\User\\Credits\\Get',
    ];

    /**
     * Retrieve your credit balance
     *
     * **This endpoint allows you to retrieve the current credit balance for your account.**
     *
     * Each account has a credit balance, which is a base number of emails it can send before receiving per-email charges. For more information about credits and billing, see [Billing and Plan details information](https://sendgrid.com/docs/ui/account-and-settings/billing/).
     */
    public function get(?\SendGridSDK\GetParams\V3\User\Credits $params = null): \SendGridSDK\Responses\V3\User\Credits\Get
    {
        /** @var \SendGridSDK\Responses\V3\User\Credits\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
