<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Clients;

final class Stats extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/clients/stats [operationId: ListClientStat] */
    /**
     * Retrieve email statistics by client type.
     *
     * **This endpoint allows you to retrieve your email statistics segmented by client type.**
     *
     * By default, 500 items will be returned per request via the Advanced Stats API endpoints.
     *
     * Advanced Stats provide a more in-depth view of your email statistics and the actions taken by your recipients. You can segment these statistics by geographic location, device type, client type, browser, and mailbox provider. For more information about statistics, please see our [Statistics Overview](https://sendgrid.com/docs/ui/analytics-and-reporting/stats-overview/).
     */
    public static function get(\SendGridSDK\GetParams\V3\Clients\Stats $params): \SendGridSDK\Collections\V3\Clients\Stats\Get\ClientsStatsCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Clients\Stats::class)->get($params);
    }
}
