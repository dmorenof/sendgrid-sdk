<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing\Stats\Singlesends\ById;

final class Links extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/marketing/stats/singlesends/{id}/links [operationId: ListSingleSendTrackingStat] */
    /**
     * Get Single Send Click Tracking Stats by ID
     *
     * **This endpoint lets you retrieve click-tracking stats for one Single Send**.
     *
     * The stats returned list the URLs embedded in the specified Single Send and the number of clicks each one received.
     */
    public static function get(string $id, ?\SendGridSDK\GetParams\V3\Marketing\Stats\Singlesends\ById\Links $params = null): \SendGridSDK\DTOs\SinglesendsLinkStatsResponse
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Stats\Singlesends\ById\Links::class)->get($id, $params);
    }
}
