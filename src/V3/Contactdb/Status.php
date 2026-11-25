<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Contactdb;

final class Status extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/contactdb/status [operationId: ListStatus] */
    /**
     * Get Recipient Upload Status
     *
     * **This endpoint allows you to check the upload status of a Marketing Campaigns recipient.**
     */
    public static function get(?\SendGridSDK\GetParams\V3\Contactdb\Status $params = null): \SendGridSDK\Responses\V3\Contactdb\Status\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Status::class)->get($params);
    }
}
