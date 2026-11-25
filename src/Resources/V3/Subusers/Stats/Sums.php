<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Subusers\Stats;

final class Sums extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/subusers/stats/sums',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\CategoryStats',
    ];

    /**
     * Retrieve the totals for each email statistic metric for all subusers.
     *
     * **This endpoint allows you to retrieve the total sums of each email statistic metric for all subusers over the given date range.**
     */
    public function get(\SendGridSDK\GetParams\V3\Subusers\Stats\Sums $params): \SendGridSDK\DTOs\CategoryStats
    {
        /** @var \SendGridSDK\DTOs\CategoryStats $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
