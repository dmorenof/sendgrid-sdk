<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing\Contacts;

final class Count extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/marketing/contacts/count [operationId: ListContactCount] */
    /**
     * Get Total Contact Count
     *
     * **This endpoint returns the total number of contacts you have stored.**
     *
     *
     * Twilio SendGrid recommends exporting your contacts regularly as a backup to avoid issues or lost data.
     */
    public static function get(): \SendGridSDK\Responses\V3\Marketing\Contacts\Count\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Contacts\Count::class)->get();
    }
}
