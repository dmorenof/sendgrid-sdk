<?php

declare(strict_types=1);

namespace SendGridSDK\V3\MailSettings;

final class BouncePurge extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/mail_settings/bounce_purge [operationId: ListBouncePurge] */
    /**
     * Retrieve Bounce Purge Mail Settings
     *
     * **This endpoint allows you to retrieve your current Bounce Purge mail settings.**
     *
     * The Bounce Purge mail setting allows you to configure the maximum age of contacts in your hard and soft bounce suppressions lists. All contacts older than their respective configured age are deleted.
     *
     * A hard bounce occurs when an email message has been returned to the sender because the recipient's address is invalid. A hard bounce might occur because the domain name doesn't exist or because the recipient is unknown.
     *
     * A soft bounce occurs when an email message reaches the recipient's mail server but is bounced back undelivered before it actually reaches the recipient. A soft bounce might occur because the recipient's inbox is full.
     *
     * You can also manage this setting in the [Mail Settings section of the Twilio SendGrid App](https://app.sendgrid.com/settings/mail_settings). You can manage your bounces manually using the [Bounces API](https://docs.sendgrid.com/api-reference/bounces-api) or the [Bounces menu in the Twilio SendGrid App](https://app.sendgrid.com/suppressions/bounces).
     */
    public static function get(?\SendGridSDK\GetParams\V3\MailSettings\BouncePurge $params = null): \SendGridSDK\DTOs\Mail\SettingsBouncePurge
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\MailSettings\BouncePurge::class)->get($params);
    }

    /** PATCH /v3/mail_settings/bounce_purge [operationId: UpdateBouncePurge] */
    /**
     * Update Bounce Purge Mail Settings
     *
     * **This endpoint allows you to update your current Bounce Purge mail settings.**
     *
     * The Bounce Purge mail metting allows you to configure the maximum age of contacts in your hard and soft bounce suppressions lists. All contacts older than their respective configured age are deleted.
     *
     * A hard bounce occurs when an email message has been returned to the sender because the recipient's address is invalid. A hard bounce might occur because the domain name doesn't exist or because the recipient is unknown.
     *
     * A soft bounce occurs when an email message reaches the recipient's mail server but is bounced back undelivered before it actually reaches the recipient. A soft bounce might occur because the recipient's inbox is full.
     *
     * You can also manage this setting in the [Mail Settings section of the Twilio SendGrid App](https://app.sendgrid.com/settings/mail_settings). You can manage your bounces manually using the [Bounces API](https://docs.sendgrid.com/api-reference/bounces-api) or the [Bounces menu in the Twilio SendGrid App](https://app.sendgrid.com/suppressions/bounces).
     */
    public static function patch(?\SendGridSDK\PatchParams\V3\MailSettings\BouncePurge $params = null): \SendGridSDK\DTOs\Mail\SettingsBouncePurge
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\MailSettings\BouncePurge::class)->patch($params);
    }
}
