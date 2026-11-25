<?php

declare(strict_types=1);

namespace SendGridSDK\V3\MailSettings;

final class Template extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/mail_settings/template [operationId: ListTemplate] */
    /**
     * Retrieve legacy template mail settings
     *
     * **This endpoint allows you to retrieve your current legacy email template settings.**
     *
     * This setting refers to our original email templates. We currently support more fully featured [Dynamic Transactional Templates](https://sendgrid.com/docs/ui/sending-email/how-to-send-an-email-with-dynamic-transactional-templates/).
     *
     * The legacy email template setting wraps an HTML template around your email content. This can be useful for sending out marketing email and/or other HTML formatted messages. For instructions on using legacy templates, see how to ["Create and Edit Legacy Transactional Templates](https://sendgrid.com/docs/ui/sending-email/create-and-edit-legacy-transactional-templates/). For help migrating to our current template system, see ["Migrating from Legacy Templates"](https://sendgrid.com/docs/ui/sending-email/migrating-from-legacy-templates/).
     */
    public static function get(?\SendGridSDK\GetParams\V3\MailSettings\Template $params = null): \SendGridSDK\DTOs\Mail\SettingsTemplate200
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\MailSettings\Template::class)->get($params);
    }

    /** PATCH /v3/mail_settings/template [operationId: UpdateTemplate] */
    /**
     * Update template mail settings
     *
     * **This endpoint allows you to update your current legacy email template settings.**
     *
     * This setting refers to our original email templates. We currently support more fully featured [Dynamic Transactional Templates](https://sendgrid.com/docs/ui/sending-email/how-to-send-an-email-with-dynamic-transactional-templates/).
     *
     * The legacy email template setting wraps an HTML template around your email content. This can be useful for sending out marketing email and/or other HTML formatted messages. For instructions on using legacy templates, see how to ["Create and Edit Legacy Transactional Templates](https://sendgrid.com/docs/ui/sending-email/create-and-edit-legacy-transactional-templates/). For help migrating to our current template system, see ["Migrating from Legacy Templates"](https://sendgrid.com/docs/ui/sending-email/migrating-from-legacy-templates/).
     */
    public static function patch(?\SendGridSDK\PatchParams\V3\MailSettings\Template $params = null): \SendGridSDK\Responses\V3\MailSettings\Template\Patch
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\MailSettings\Template::class)->patch($params);
    }
}
