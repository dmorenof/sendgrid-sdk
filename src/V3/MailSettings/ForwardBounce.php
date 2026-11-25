<?php

declare(strict_types=1);

namespace SendGridSDK\V3\MailSettings;

final class ForwardBounce extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/mail_settings/forward_bounce [operationId: ListForwardBounce] */
    /**
     * Retrieve forward bounce mail settings
     *
     * **This endpoint allows you to retrieve your current bounce forwarding mail settings.**
     *
     * Enabling the Forward Bounce setting allows you to specify `email` addresses to which bounce reports will be forwarded. This endpoint returns the email address you have set to receive forwarded bounces and an `enabled` status indicating if the setting is active.
     */
    public static function get(?\SendGridSDK\GetParams\V3\MailSettings\ForwardBounce $params = null): \SendGridSDK\DTOs\Mail\SettingsForwardBounce
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\MailSettings\ForwardBounce::class)->get($params);
    }

    /** PATCH /v3/mail_settings/forward_bounce [operationId: UpdateForwardBounce] */
    /**
     * Update forward bounce mail settings
     *
     * **This endpoint allows you to update your current bounce forwarding mail settings.**
     *
     * Enabling the Forward Bounce setting allows you to specify an `email` address to which bounce reports will be forwarded.
     *
     * You can also configure the Forward Spam mail settings in the [Mail Settings section of the Twilio SendGrid App](https://app.sendgrid.com/settings/mail_settings).
     */
    public static function patch(?\SendGridSDK\PatchParams\V3\MailSettings\ForwardBounce $params = null): \SendGridSDK\DTOs\Mail\SettingsForwardBounce
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\MailSettings\ForwardBounce::class)->patch($params);
    }
}
