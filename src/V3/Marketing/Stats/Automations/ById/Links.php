<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing\Stats\Automations\ById;

final class Links extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/marketing/stats/automations/{id}/links [operationId: ListClickTrackingStat] */
    /**
     * Get Automation Click Tracking Stats by ID
     *
     * **This endpoint lets you retrieve click-tracking stats for a single Automation**.
     *
     * The stats returned list the URLs embedded in your Automation and the number of clicks each one received.
     */
    public static function get(string $id, ?\SendGridSDK\GetParams\V3\Marketing\Stats\Automations\ById\Links $params = null): \SendGridSDK\DTOs\AutmoationsLinkStatsResponse
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Stats\Automations\ById\Links::class)->get($id, $params);
    }
}
