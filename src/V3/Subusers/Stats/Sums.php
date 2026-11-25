<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Subusers\Stats;

final class Sums extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/subusers/stats/sums [operationId: ListStatSum] */
    /**
     * Retrieve the totals for each email statistic metric for all subusers.
     *
     * **This endpoint allows you to retrieve the total sums of each email statistic metric for all subusers over the given date range.**
     */
    public static function get(\SendGridSDK\GetParams\V3\Subusers\Stats\Sums $params): \SendGridSDK\DTOs\CategoryStats
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Subusers\Stats\Sums::class)->get($params);
    }
}
