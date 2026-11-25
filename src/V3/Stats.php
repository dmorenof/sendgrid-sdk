<?php

declare(strict_types=1);

namespace SendGridSDK\V3;

final class Stats extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/stats [operationId: ListStat] */
    /**
     * Retrieve global email statistics
     *
     * **This endpoint allows you to retrieve all of your global email statistics between a given date range.**
     *
     * Parent accounts can see either aggregated stats for the parent account or aggregated stats for a subuser specified in the `on-behalf-of` header. Subuser accounts will see only their own stats.
     */
    public static function get(\SendGridSDK\GetParams\V3\Stats $params): \SendGridSDK\Collections\V3\Stats\Get\StatsCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Stats::class)->get($params);
    }
}
