<?php

declare(strict_types=1);

namespace SendGridSDK\V3\MailSettings;

final class Footer extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/mail_settings/footer [operationId: ListFooter] */
    /**
     * Retrieve footer mail settings
     *
     * **This endpoint allows you to retrieve your current Footer mail settings.**
     *
     * The Footer setting will insert a custom footer at the bottom of your text and HTML email message bodies.
     *
     * You can insert your HTML or plain text directly using the "Update footer mail settings" endpoint, or you can create the footer using the [Mail Settings menu in the Twilio SendGrid App](https://app.sendgrid.com/settings/mail_settings).
     */
    public static function get(?\SendGridSDK\GetParams\V3\MailSettings\Footer $params = null): \SendGridSDK\DTOs\Mail\SettingsFooter
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\MailSettings\Footer::class)->get($params);
    }

    /** PATCH /v3/mail_settings/footer [operationId: UpdateFooter] */
    /**
     * Update footer mail settings
     *
     * **This endpoint allows you to update your current Footer mail settings.**
     *
     * The Footer setting will insert a custom footer at the bottom of your text and HTML email message bodies.
     *
     * You can insert your HTML or plain text directly using this endpoint, or you can create the footer using the [Mail Settings menu in the Twilio SendGrid App](https://app.sendgrid.com/settings/mail_settings).
     */
    public static function patch(?\SendGridSDK\PatchParams\V3\MailSettings\Footer $params = null): \SendGridSDK\DTOs\Mail\SettingsFooter
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\MailSettings\Footer::class)->patch($params);
    }
}
