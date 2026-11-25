<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Categories\Stats;

final class Sums extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/categories/stats/sums [operationId: ListCategoryStatSum] */
    /**
     * Retrieve sums of email stats for each category.
     *
     * **This endpoint allows you to retrieve the total sum of each email statistic for every category over the given date range.**
     *
     * If you do not define any query parameters, this endpoint will return a sum for each category in groups of 10.
     */
    public static function get(\SendGridSDK\GetParams\V3\Categories\Stats\Sums $params): \SendGridSDK\DTOs\CategoryStats
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Categories\Stats\Sums::class)->get($params);
    }
}
