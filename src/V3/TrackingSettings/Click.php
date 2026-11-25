<?php

declare(strict_types=1);

namespace SendGridSDK\V3\TrackingSettings;

final class Click extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/tracking_settings/click [operationId: ListClickTrackingSetting] */
    /**
     * Retrieve Click Track Settings
     *
     * **This endpoint allows you to retrieve your current click tracking setting.**
     *
     * Click Tracking overrides all the links and URLs in your emails and points them to either SendGrid’s servers or the domain with which you branded your link. When a customer clicks a link, SendGrid tracks those [clicks](https://sendgrid.com/docs/glossary/clicks/).
     *
     * Click tracking helps you understand how users are engaging with your communications. SendGrid can track up to 1000 links per email
     */
    public static function get(?\SendGridSDK\GetParams\V3\TrackingSettings\Click $params = null): \SendGridSDK\DTOs\ClickTracking
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\TrackingSettings\Click::class)->get($params);
    }

    /** PATCH /v3/tracking_settings/click [operationId: UpdateClickTrackingSetting] */
    /**
     * Update Click Tracking Settings
     *
     * **This endpoint allows you to enable or disable your current click tracking setting.**
     *
     * Click Tracking overrides all the links and URLs in your emails and points them to either SendGrid’s servers or the domain with which you branded your link. When a customer clicks a link, SendGrid tracks those [clicks](https://sendgrid.com/docs/glossary/clicks/).
     *
     * Click tracking helps you understand how users are engaging with your communications. SendGrid can track up to 1000 links per email
     */
    public static function patch(?\SendGridSDK\PatchParams\V3\TrackingSettings\Click $params = null): \SendGridSDK\DTOs\ClickTracking
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\TrackingSettings\Click::class)->patch($params);
    }
}
