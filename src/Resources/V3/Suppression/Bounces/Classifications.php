<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Suppression\Bounces;

final class Classifications extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/suppression/bounces/classifications',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\SuppressionsErrorResponse',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\SuppressionsErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Suppression\\Bounces\\Classifications\\Get',
    ];

    /**
     * Retrieve bounce classification totals
     *
     * This endpoint will return the total number of bounces by classification in descending order for each day. You can retrieve the bounce classification totals in CSV format by specifying `"text/csv"` in the Accept header.
     */
    public function get(\SendGridSDK\GetParams\V3\Suppression\Bounces\Classifications $params): \SendGridSDK\Responses\V3\Suppression\Bounces\Classifications\Get
    {
        /** @var \SendGridSDK\Responses\V3\Suppression\Bounces\Classifications\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_CLASSIFICATION = [
        'method' => 'GET',
        'path' => '/v3/suppression/bounces/classifications/{classification}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Suppression\\Bounces\\Classifications\\ByClassification\\Get',
    ];

    /**
     * Retrieve bounce classification over time by domain stats
     *
     * This endpoint will return the number of bounces for the classification specified in descending order for each day. You can retrieve the bounce classification totals in CSV format by specifying `"text/csv"` in the Accept header.
     */
    public function getByClassification(\SendGridSDK\Enums\Classification1 $classification, \SendGridSDK\GetParams\V3\Suppression\Bounces\Classifications\ByClassification $params): \SendGridSDK\Responses\V3\Suppression\Bounces\Classifications\ByClassification\Get
    {
        /** @var \SendGridSDK\Responses\V3\Suppression\Bounces\Classifications\ByClassification\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CLASSIFICATION), path: ['classification' => $classification], parameters: $params);
        return $result;
    }
}
