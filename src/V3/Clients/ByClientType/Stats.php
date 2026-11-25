<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Clients\ByClientType;

final class Stats extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/clients/{client_type}/stats [operationId: GetClientStat] */
    /**
     * Retrieve stats by a specific client type.
     *
     * **This endpoint allows you to retrieve your email statistics segmented by a specific client type.**
     *
     * By default, 500 items will be returned per request via the Advanced Stats API endpoints.
     *
     * ### Available Client Types
     * - phone
     * - tablet
     * - webmail
     * - desktop
     *
     * Advanced Stats provide a more in-depth view of your email statistics and the actions taken by your recipients. You can segment these statistics by geographic location, device type, client type, browser, and mailbox provider. For more information about statistics, please see our [Statistics Overview](https://sendgrid.com/docs/ui/analytics-and-reporting/stats-overview/).
     */
    public static function get(\SendGridSDK\Enums\ClientType $client_type, \SendGridSDK\GetParams\V3\Clients\ByClientType\Stats $params): \SendGridSDK\Collections\V3\Clients\ByClientType\Stats\Get\ByClientTypeStatsCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Clients\ByClientType\Stats::class)->get($client_type, $params);
    }
}
