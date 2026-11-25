<?php

declare(strict_types=1);

namespace SendGridSDK\V3\User;

final class Password extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** PUT /v3/user/password [operationId: UpdatePassword] */
    /**
     * Update your password
     *
     * **This endpoint allows you to update your password.**
     */
    public static function put(?\SendGridSDK\PutParams\V3\User\Password $params = null): \SendGridSDK\Responses\V3\User\Password\Put
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\Password::class)->put($params);
    }
}
