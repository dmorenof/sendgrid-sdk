<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Categories\Stats;

final class Sums extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/categories/stats/sums',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\CategoryStats',
    ];

    /**
     * Retrieve sums of email stats for each category.
     *
     * **This endpoint allows you to retrieve the total sum of each email statistic for every category over the given date range.**
     *
     * If you do not define any query parameters, this endpoint will return a sum for each category in groups of 10.
     */
    public function get(\SendGridSDK\GetParams\V3\Categories\Stats\Sums $params): \SendGridSDK\DTOs\CategoryStats
    {
        /** @var \SendGridSDK\DTOs\CategoryStats $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
