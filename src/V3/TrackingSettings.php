<?php

declare(strict_types=1);

namespace SendGridSDK\V3;

final class TrackingSettings extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/tracking_settings [operationId: ListTrackingSetting] */
    /**
     * Retrieve Tracking Settings
     *
     * **This endpoint allows you to retrieve a list of all tracking settings on your account.**
     */
    public static function get(?\SendGridSDK\GetParams\V3\TrackingSettings $params = null): \SendGridSDK\Responses\V3\TrackingSettings\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\TrackingSettings::class)->get($params);
    }
}
