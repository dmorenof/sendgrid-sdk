<?php

declare(strict_types=1);

namespace SendGridSDK\V3\TrackingSettings;

final class Open extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/tracking_settings/open [operationId: ListOpenTrackingSetting] */
    /**
     * Get Open Tracking Settings
     *
     * **This endpoint allows you to retrieve your current settings for open tracking.**
     *
     * Open Tracking adds an invisible image at the end of the email which can track email opens.
     *
     * If the email recipient has images enabled on their email client, a request to SendGrid’s server for the invisible image is executed and an open event is logged.
     *
     * These events are logged in the Statistics portal, Email Activity interface, and are reported by the Event Webhook.
     */
    public static function get(?\SendGridSDK\GetParams\V3\TrackingSettings\Open $params = null): \SendGridSDK\Responses\V3\TrackingSettings\Open\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\TrackingSettings\Open::class)->get($params);
    }

    /** PATCH /v3/tracking_settings/open [operationId: UpdateOpenTrackingSetting] */
    /**
     * Update Open Tracking Settings
     *
     * **This endpoint allows you to update your current settings for open tracking.**
     *
     * Open Tracking adds an invisible image at the end of the email which can track email opens.
     *
     * If the email recipient has images enabled on their email client, a request to SendGrid’s server for the invisible image is executed and an open event is logged.
     *
     * These events are logged in the Statistics portal, Email Activity interface, and are reported by the Event Webhook.
     */
    public static function patch(?\SendGridSDK\PatchParams\V3\TrackingSettings\Open $params = null): \SendGridSDK\Responses\V3\TrackingSettings\Open\Patch
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\TrackingSettings\Open::class)->patch($params);
    }
}
