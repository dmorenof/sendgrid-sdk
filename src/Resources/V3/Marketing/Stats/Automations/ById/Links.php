<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing\Stats\Automations\ById;

final class Links extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/marketing/stats/automations/{id}/links',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Mc\\StatsError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Mc\\StatsError\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\StatsError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\StatsError\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\AutmoationsLinkStatsResponse',
        'querySerialization' => [
            'group_by' => 'csv',
            'step_ids' => 'csv',
        ],
    ];

    /**
     * Get Automation Click Tracking Stats by ID
     *
     * **This endpoint lets you retrieve click-tracking stats for a single Automation**.
     *
     * The stats returned list the URLs embedded in your Automation and the number of clicks each one received.
     */
    public function get(string $id, ?\SendGridSDK\GetParams\V3\Marketing\Stats\Automations\ById\Links $params = null): \SendGridSDK\DTOs\AutmoationsLinkStatsResponse
    {
        /** @var \SendGridSDK\DTOs\AutmoationsLinkStatsResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
