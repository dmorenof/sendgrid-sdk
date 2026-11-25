<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Engagementquality\Subusers;

final class Scores extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/engagementquality/subusers/scores',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            202,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant4Response',
            401 => null,
            403 => null,
            404 => null,
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant2Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant4Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => 'mixed',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant2Response',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\SendGridSDK\\Responses\\V3\\Engagementquality\\Subusers\\Scores\\Get',
                'schemaNullable' => false,
            ],
            202 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Get Subusers' Engagement Quality Scores
     *
     * **This operation allows you to retrieve SendGrid Engagement Quality (SEQ) scores for your Subusers or customer accounts for a specific date.**
     * A successful request with this API operation will return either a `200` or `202` response.
     * ### 202
     * This operation returns a `202` response when SendGrid does not yet have scores available for the specified date range. Scores are calculated asynchronously from requests to this endpoint. This means a score may be available for the specified date at a later time, but a score is not available at the time of your API request.
     * ### 200
     * A `200` response will include scores for all Subusers or customer accounts belonging to the requesting parent or reseller account. The `score` and `metrics` properties will be omitted from the response if a Subuser or customer account is not eligible to receive a score for the specified date.
     * The `score` property represents a Subuser or customer account's overall engagement quality. The `metrics` property provides additional scores for the input categories that contribute to that overall score. All scores range from `1` to `5` with a higher number representing better engagement quality.
     * See [**SendGrid Engagement Quality Overview**](https://docs.sendgrid.com/api-reference/sendgrid-engagement-quality-api/overview) for more information
     */
    public function get(\SendGridSDK\GetParams\V3\Engagementquality\Subusers\Scores $params): ?\SendGridSDK\Responses\V3\Engagementquality\Subusers\Scores\Get
    {
        /** @var ?\SendGridSDK\Responses\V3\Engagementquality\Subusers\Scores\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
