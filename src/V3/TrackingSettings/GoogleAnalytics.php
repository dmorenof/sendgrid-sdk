<?php

declare(strict_types=1);

namespace SendGridSDK\V3\TrackingSettings;

final class GoogleAnalytics extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/tracking_settings/google_analytics [operationId: ListGoogleAnalyticsTrackingSetting] */
    /**
     * Retrieve Google Analytics Settings
     *
     * **This endpoint allows you to retrieve your current setting for Google Analytics.**
     *
     *
     * Google Analytics helps you understand how users got to your site and what they're doing there. For more information about using Google Analytics, please refer to [Google’s URL Builder](https://support.google.com/analytics/answer/1033867?hl=en) and their article on ["Best Practices for Campaign Building"](https://support.google.com/analytics/answer/1037445).
     *
     * We default the settings to Google’s recommendations. For more information, see [Google Analytics Demystified](https://sendgrid.com/docs/ui/analytics-and-reporting/google-analytics/).
     */
    public static function get(?\SendGridSDK\GetParams\V3\TrackingSettings\GoogleAnalytics $params = null): \SendGridSDK\DTOs\GoogleAnalyticsSettings
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\TrackingSettings\GoogleAnalytics::class)->get($params);
    }

    /** PATCH /v3/tracking_settings/google_analytics [operationId: UpdateGoogleAnalyticsTrackingSetting] */
    /**
     * Update Google Analytics Settings
     *
     * **This endpoint allows you to update your current setting for Google Analytics.**
     *
     * Google Analytics helps you understand how users got to your site and what they're doing there. For more information about using Google Analytics, please refer to [Google’s URL Builder](https://support.google.com/analytics/answer/1033867?hl=en) and their article on ["Best Practices for Campaign Building"](https://support.google.com/analytics/answer/1037445).
     *
     * We default the settings to Google’s recommendations. For more information, see [Google Analytics Demystified](https://sendgrid.com/docs/ui/analytics-and-reporting/google-analytics/).
     */
    public static function patch(?\SendGridSDK\PatchParams\V3\TrackingSettings\GoogleAnalytics $params = null): \SendGridSDK\DTOs\GoogleAnalyticsSettings
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\TrackingSettings\GoogleAnalytics::class)->patch($params);
    }
}
