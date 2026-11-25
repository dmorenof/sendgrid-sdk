<?php

declare(strict_types=1);

namespace SendGridSDK\V3\User;

final class Account extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/user/account [operationId: ListAccountUser] */
    /**
     * Get a user's account information.
     *
     * **This endpoint allows you to retrieve your user account details.**
     *
     * Your user's account information includes the user's account type and reputation.
     */
    public static function get(?\SendGridSDK\GetParams\V3\User\Account $params = null): \SendGridSDK\Responses\V3\User\Account\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\Account::class)->get($params);
    }
}
