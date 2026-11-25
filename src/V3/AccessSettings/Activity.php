<?php

declare(strict_types=1);

namespace SendGridSDK\V3\AccessSettings;

final class Activity extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/access_settings/activity [operationId: ListAccessActivity] */
    /**
     * Retrieve all recent access attempts
     *
     * **This endpoint allows you to retrieve a list of all of the IP addresses that recently attempted to access your account either through the User Interface or the API.**
     */
    public static function get(?\SendGridSDK\GetParams\V3\AccessSettings\Activity $params = null): \SendGridSDK\Responses\V3\AccessSettings\Activity\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\AccessSettings\Activity::class)->get($params);
    }
}
