<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Subusers\Stats;

final class Monthly extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/subusers/stats/monthly [operationId: ListMonthlyStat] */
    /**
     * Retrieve monthly stats for all subusers
     *
     * **This endpoint allows you to retrieve the monthly email statistics for all subusers over the given date range.**
     *
     * When using the `sort_by_metric` to sort your stats by a specific metric, you can not sort by the following metrics:
     * `bounce_drops`, `deferred`, `invalid_emails`, `processed`, `spam_report_drops`, `spam_reports`, or `unsubscribe_drops`.
     */
    public static function get(\SendGridSDK\GetParams\V3\Subusers\Stats\Monthly $params): \SendGridSDK\DTOs\Subuser\Stats
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Subusers\Stats\Monthly::class)->get($params);
    }
}
