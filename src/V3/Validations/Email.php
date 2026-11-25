<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Validations;

final class Email extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/validations/email [operationId: ValidateEmail] */
    /**
     * Validate an email
     *
     * **This endpoint allows you to validate an email address.**
     */
    public static function post(?\SendGridSDK\Requests\V3\Validations\Email\Post $payload = null): \SendGridSDK\Responses\V3\Validations\Email\Post
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Validations\Email::class)->post();
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Validations\Email::class)->post($payload);
    }
}
