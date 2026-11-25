<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Categories;

final class Stats extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/categories/stats [operationId: ListCategoryStat] */
    /**
     * Retrieve Email Statistics for Categories
     *
     * **This endpoint allows you to retrieve all of your email statistics for each of your categories.**
     *
     * If you do not define any query parameters, this endpoint will return a sum for each category in groups of 10.
     */
    public static function get(\SendGridSDK\GetParams\V3\Categories\Stats $params): \SendGridSDK\Collections\V3\Categories\Stats\Get\CategoriesStatsCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Categories\Stats::class)->get($params);
    }
}
