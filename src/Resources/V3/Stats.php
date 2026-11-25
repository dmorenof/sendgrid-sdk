<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3;

final class Stats extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/stats',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Stats\\Get\\StatsCollection',
    ];

    /**
     * Retrieve global email statistics
     *
     * **This endpoint allows you to retrieve all of your global email statistics between a given date range.**
     *
     * Parent accounts can see either aggregated stats for the parent account or aggregated stats for a subuser specified in the `on-behalf-of` header. Subuser accounts will see only their own stats.
     */
    public function get(\SendGridSDK\GetParams\V3\Stats $params): \SendGridSDK\Collections\V3\Stats\Get\StatsCollection
    {
        /** @var \SendGridSDK\Collections\V3\Stats\Get\StatsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
