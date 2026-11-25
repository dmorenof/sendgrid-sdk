<?php

declare(strict_types=1);

namespace SendGridSDK\V3\User;

final class Username extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/user/username [operationId: ListUsername] */
    /**
     * Retrieve your username
     *
     * **This endpoint allows you to retrieve your current account username.**
     */
    public static function get(?\SendGridSDK\GetParams\V3\User\Username $params = null): \SendGridSDK\Responses\V3\User\Username\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\Username::class)->get($params);
    }

    /** PUT /v3/user/username [operationId: UpdateUsername] */
    /**
     * Update your username
     *
     * **This endpoint allows you to update the username for your account.**
     */
    public static function put(?\SendGridSDK\PutParams\V3\User\Username $params = null): \SendGridSDK\Responses\V3\User\Username\Put
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\Username::class)->put($params);
    }
}
