<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Contactdb\Recipients;

final class BillableCount extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/contactdb/recipients/billable_count [operationId: GetBillable] */
    /**
     * Retrieve the count of billable recipients
     *
     * **This endpoint allows you to retrieve the number of Marketing Campaigns recipients that you will be billed for.**
     *
     * You are billed for marketing campaigns based on the highest number of recipients you have had in your account at one time. This endpoint will allow you to know the current billable count value.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Contactdb\Recipients\BillableCount $params = null): \SendGridSDK\DTOs\Contactdb\RecipientCount200
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Recipients\BillableCount::class)->get($params);
    }
}
