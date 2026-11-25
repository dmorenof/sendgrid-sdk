<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Subusers;

final class Stats extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/subusers/stats [operationId: ListStatSubusers] */
    /**
     * Retrieve email statistics for your subusers.
     *
     * **This endpoint allows you to retrieve the email statistics for the given subusers.**
     *
     * You may retrieve statistics for up to 10 different subusers by including an additional _subusers_ parameter for each additional subuser.
     */
    public static function get(\SendGridSDK\GetParams\V3\Subusers\Stats $params): \SendGridSDK\Collections\V3\Categories\Stats\Get\CategoriesStatsCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Subusers\Stats::class)->get($params);
    }
}
