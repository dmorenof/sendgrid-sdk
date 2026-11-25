<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Categories;

final class Stats extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/categories/stats',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Categories\\Stats\\Get\\CategoriesStatsCollection',
    ];

    /**
     * Retrieve Email Statistics for Categories
     *
     * **This endpoint allows you to retrieve all of your email statistics for each of your categories.**
     *
     * If you do not define any query parameters, this endpoint will return a sum for each category in groups of 10.
     */
    public function get(\SendGridSDK\GetParams\V3\Categories\Stats $params): \SendGridSDK\Collections\V3\Categories\Stats\Get\CategoriesStatsCollection
    {
        /** @var \SendGridSDK\Collections\V3\Categories\Stats\Get\CategoriesStatsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
