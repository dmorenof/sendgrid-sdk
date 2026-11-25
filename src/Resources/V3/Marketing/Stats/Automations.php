<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing\Stats;

final class Automations extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/marketing/stats/automations',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Mc\\StatsError\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\StatsError\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\AutomationsResponse',
        'querySerialization' => [
            'automation_ids' => 'csv',
        ],
    ];

    /**
     * Get All Automation Stats
     *
     * **This endpoint allows you to retrieve stats for all your Automations.**
     *
     * By default, all of your Automations will be returned, but you can specify a selection by passing in a comma-separated list of Automation IDs as the value of the query string parameter `automation_ids`.
     *
     * Responses are paginated. You can limit the number of responses returned per batch using the `page_size` query string parameter. The default is 25, but you can specify a value between 1 and 50.
     *
     * You can retrieve a specific page of responses with the `page_token` query string parameter.
     */
    public function get(?\SendGridSDK\GetParams\V3\Marketing\Stats\Automations $params = null): \SendGridSDK\DTOs\AutomationsResponse
    {
        /** @var \SendGridSDK\DTOs\AutomationsResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v3/marketing/stats/automations/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Mc\\StatsError\\Response',
            404 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\StatsError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\AutomationsResponse',
        'querySerialization' => [
            'group_by' => 'csv',
            'step_ids' => 'csv',
        ],
    ];

    /**
     * Get Automation Stats by ID
     *
     * **This endpoint allows you to retrieve stats for a single Automation using its ID.**
     *
     * Multiple Automation IDs can be retrieved using the "Get All Automation Stats" endpoint. Once you have an ID, this endpoint will return detailed stats for the single automation specified.
     *
     * You may constrain the stats returned using the `start_date` and `end_date` query string parameters. You can also use the `group_by` and `aggregated_by` query string parameters to further refine the stats returned.
     */
    public function getById(string $id, ?\SendGridSDK\GetParams\V3\Marketing\Stats\Automations\ById $params = null): \SendGridSDK\DTOs\AutomationsResponse
    {
        /** @var \SendGridSDK\DTOs\AutomationsResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
