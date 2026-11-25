<?php

declare(strict_types=1);

namespace SendGridSDK\V3;

final class PartnerSettings extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/partner_settings [operationId: ListPartnerSetting] */
    /**
     * Returns a list of all partner settings.
     *
     * **This endpoint allows you to retrieve a paginated list of all partner settings that you can enable.**
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests.
     *
     * Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.'
     *
     */
    public static function get(?\SendGridSDK\GetParams\V3\PartnerSettings $params = null): \SendGridSDK\Responses\V3\PartnerSettings\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\PartnerSettings::class)->get($params);
    }
}
