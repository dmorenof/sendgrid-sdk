<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Geo;

final class Stats extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/geo/stats [operationId: ListGeoStat] */
    /**
     * Retrieve email statistics by country and state/province.
     *
     * **This endpoint allows you to retrieve your email statistics segmented by country and state/province.**
     * By default, 500 items will be returned per request via the Advanced Stats API endpoints.
     * For Regional (EU) subusers, this service is not available due to PII restrictions.
     * Advanced Stats provide a more in-depth view of your email statistics and the actions taken by your recipients. You can segment these statistics by geographic location, device type, client type, browser, and mailbox provider. For more information about statistics, please see our [User Guide](https://wwww.twilio.com/docs/sendgrid/ui/analytics-and-reporting/stats-overview).
     */
    public static function get(\SendGridSDK\GetParams\V3\Geo\Stats $params): \SendGridSDK\Collections\V3\Geo\Stats\Get\GeoStatsCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Geo\Stats::class)->get($params);
    }
}
