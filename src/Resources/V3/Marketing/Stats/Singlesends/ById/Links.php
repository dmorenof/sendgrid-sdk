<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing\Stats\Singlesends\ById;

final class Links extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/marketing/stats/singlesends/{id}/links',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Mc\\StatsError\\Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\StatsError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\SinglesendsLinkStatsResponse',
        'querySerialization' => [
            'group_by' => 'csv',
        ],
    ];

    /**
     * Get Single Send Click Tracking Stats by ID
     *
     * **This endpoint lets you retrieve click-tracking stats for one Single Send**.
     *
     * The stats returned list the URLs embedded in the specified Single Send and the number of clicks each one received.
     */
    public function get(string $id, ?\SendGridSDK\GetParams\V3\Marketing\Stats\Singlesends\ById\Links $params = null): \SendGridSDK\DTOs\SinglesendsLinkStatsResponse
    {
        /** @var \SendGridSDK\DTOs\SinglesendsLinkStatsResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
