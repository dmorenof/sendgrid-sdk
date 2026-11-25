<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Subusers\BySubuserName\Stats;

final class Monthly extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/subusers/{subuser_name}/stats/monthly [operationId: ListSubuserMonthlyStat] */
    /**
     * Retrieve the monthly email statistics for a single subuser
     *
     * **This endpoint allows you to retrive the monthly email statistics for a specific subuser.**
     *
     * When using the `sort_by_metric` to sort your stats by a specific metric, you can not sort by the following metrics:
     * `bounce_drops`, `deferred`, `invalid_emails`, `processed`, `spam_report_drops`, `spam_reports`, or `unsubscribe_drops`.
     *
     */
    public static function get(string $subuser_name, \SendGridSDK\GetParams\V3\Subusers\BySubuserName\Stats\Monthly $params): \SendGridSDK\DTOs\Subuser\Stats
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Subusers\BySubuserName\Stats\Monthly::class)->get($subuser_name, $params);
    }
}
