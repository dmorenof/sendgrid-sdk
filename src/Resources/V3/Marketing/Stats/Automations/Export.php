<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing\Stats\Automations;

final class Export extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/marketing/stats/automations/export',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'responseType' => 'string',
        'querySerialization' => [
            'ids' => 'csv',
        ],
    ];

    /**
     * Export Single Send Stats
     *
     * **This endpoint allows you to export Single Send stats as .CSV data**.
     *
     * You can specify one Single Send or many: include as many Single Send IDs as you need, separating them with commas, as the value of the `ids` query string parameter.
     *
     * The data is returned as plain text response but in .CSV format, so your application making the call can present the information in whatever way is most appropriate, or just save the data as a .csv file.
     */
    public function get(?\SendGridSDK\GetParams\V3\Marketing\Stats\Automations\Export $params = null): string
    {
        /** @var string $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
