<?php

declare(strict_types=1);

namespace SendGridSDK\V3\MailSettings;

final class ForwardSpam extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/mail_settings/forward_spam [operationId: ListForwardSpam] */
    /**
     * Retrieve forward spam mail settings
     *
     * **This endpoint allows you to retrieve your current Forward Spam mail settings.**
     *
     * Enabling the Forward Spam setting allows you to specify `email` addresses to which spam reports will be forwarded. This endpoint returns any email address(es) you have set to receive forwarded spam and an `enabled` status indicating if the setting is active.
     */
    public static function get(?\SendGridSDK\GetParams\V3\MailSettings\ForwardSpam $params = null): \SendGridSDK\DTOs\Mail\SettingsForwardSpam
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\MailSettings\ForwardSpam::class)->get($params);
    }

    /** PATCH /v3/mail_settings/forward_spam [operationId: UpdateForwardSpam] */
    /**
     * Update forward spam mail settings
     *
     * **This endpoint allows you to update your current Forward Spam mail settings.**
     *
     * Enabling the Forward Spam setting allows you to specify `email` addresses to which spam reports will be forwarded. You can set multiple addresses by passing this endpoint a comma separated list of emails in a single string.
     *
     * ```
     * {
     *   "email": "address1&#64;example.com, address2&#64;exapmle.com",
     *   "enabled": true
     * }
     * ```
     *
     * The Forward Spam setting may also be used to receive emails sent to `abuse&#64;` and `postmaster&#64;` role addresses if you have authenticated your domain.
     *
     * For example, if you authenticated `example.com` as your root domain and set a custom return path of `sub` for that domain, you could turn on Forward Spam, and any emails sent to `abuse&#64;sub.example.com` or `postmaster&#64;sub.example.com` would be forwarded to the email address you entered in the `email` field.
     *
     * You can authenticate your domain using the "Authenticate a domain" endpoint or in the [Sender Authentication section of the Twilio SendGrid App](https://app.sendgrid.com/settings/sender_auth). You can also configure the Forward Spam mail settings in the [Mail Settings section of the Twilio SendGrid App](https://app.sendgrid.com/settings/mail_settings).
     */
    public static function patch(?\SendGridSDK\PatchParams\V3\MailSettings\ForwardSpam $params = null): \SendGridSDK\DTOs\Mail\SettingsForwardSpam
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\MailSettings\ForwardSpam::class)->patch($params);
    }
}
