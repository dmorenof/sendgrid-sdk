<?php

declare(strict_types=1);

namespace SendGridSDK\V3;

final class MailSettings extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/mail_settings [operationId: ListMailSetting] */
    /**
     * Retrieve all mail settings
     *
     * **This endpoint allows you to retrieve a paginated list of all mail settings.**
     *
     * Each setting will be returned with an `enabled` status set to `true` or `false` and a short description that explains what the setting does.
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public static function get(?\SendGridSDK\GetParams\V3\MailSettings $params = null): \SendGridSDK\Responses\V3\MailSettings\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\MailSettings::class)->get($params);
    }
}
