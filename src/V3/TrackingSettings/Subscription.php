<?php

declare(strict_types=1);

namespace SendGridSDK\V3\TrackingSettings;

final class Subscription extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/tracking_settings/subscription [operationId: ListSubscriptionTrackingSetting] */
    /**
     * Retrieve Subscription Tracking Settings
     *
     * **This endpoint allows you to retrieve your current settings for subscription tracking.**
     *
     * Subscription tracking adds links to the bottom of your emails that allows your recipients to subscribe to, or unsubscribe from, your emails.
     */
    public static function get(?\SendGridSDK\GetParams\V3\TrackingSettings\Subscription $params = null): \SendGridSDK\DTOs\SubscriptionTrackingSettings
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\TrackingSettings\Subscription::class)->get($params);
    }

    /** PATCH /v3/tracking_settings/subscription [operationId: UpdateSubscriptionTrackingSetting] */
    /**
     * Update Subscription Tracking Settings
     *
     * **This endpoint allows you to update your current settings for subscription tracking.**
     *
     * Subscription tracking adds links to the bottom of your emails that allows your recipients to subscribe to, or unsubscribe from, your emails.
     */
    public static function patch(?\SendGridSDK\PatchParams\V3\TrackingSettings\Subscription $params = null): \SendGridSDK\DTOs\SubscriptionTrackingSettings
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\TrackingSettings\Subscription::class)->patch($params);
    }
}
