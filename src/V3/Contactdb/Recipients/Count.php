<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Contactdb\Recipients;

final class Count extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/contactdb/recipients/count [operationId: ListRecipientCount] */
    /**
     * Retrieve a Count of Recipients
     *
     * **This endpoint allows you to retrieve the total number of Marketing Campaigns recipients.**
     */
    public static function get(?\SendGridSDK\GetParams\V3\Contactdb\Recipients\Count $params = null): \SendGridSDK\DTOs\Contactdb\RecipientCount200
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Recipients\Count::class)->get($params);
    }
}
