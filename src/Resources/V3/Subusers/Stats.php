<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Subusers;

final class Stats extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/subusers/stats',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Categories\\Stats\\Get\\CategoriesStatsCollection',
    ];

    /**
     * Retrieve email statistics for your subusers.
     *
     * **This endpoint allows you to retrieve the email statistics for the given subusers.**
     *
     * You may retrieve statistics for up to 10 different subusers by including an additional _subusers_ parameter for each additional subuser.
     */
    public function get(\SendGridSDK\GetParams\V3\Subusers\Stats $params): \SendGridSDK\Collections\V3\Categories\Stats\Get\CategoriesStatsCollection
    {
        /** @var \SendGridSDK\Collections\V3\Categories\Stats\Get\CategoriesStatsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
