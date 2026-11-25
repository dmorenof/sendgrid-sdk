<?php

declare(strict_types=1);

namespace SendGridSDK\V3\User;

final class Email extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/user/email [operationId: ListEmail] */
    /**
     * Retrieve your account email address
     *
     * **This endpoint allows you to retrieve the email address currently on file for your account.**
     */
    public static function get(?\SendGridSDK\GetParams\V3\User\Email $params = null): \SendGridSDK\Responses\V3\User\Email\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\Email::class)->get($params);
    }

    /** PUT /v3/user/email [operationId: UpdateEmail] */
    /**
     * Update your account email address
     *
     * **This endpoint allows you to update the email address currently on file for your account.**
     */
    public static function put(?\SendGridSDK\PutParams\V3\User\Email $params = null): \SendGridSDK\Responses\V3\User\Email\Put
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\Email::class)->put($params);
    }
}
