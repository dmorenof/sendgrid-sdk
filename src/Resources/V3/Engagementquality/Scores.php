<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Engagementquality;

final class Scores extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/engagementquality/scores',
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
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant2Response',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\SendGridSDK\\Responses\\V3\\Engagementquality\\Scores\\GetStatus200',
                'schemaNullable' => false,
            ],
            202 => [
                'type' => 'mixed',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Get Engagement Quality Scores
     *
     * **This operation allows you to retrieve your SendGrid Engagement Quality (SEQ) scores for a specified date range**.
     * A successful request with this API operation will return either a `200` or `202` response.
     * ### 202
     * This operation returns a `202` response when SendGrid does not yet have scores available for the specified date range. Scores are calculated asynchronously from requests to this endpoint. This means a score may be available for the specified date at a later time, but a score is not available at the time of your API request.
     * ### 200
     * A 200 response will include all available scores beginning on the `from` and ending on the `to` dates specified. The `score` and `metrics` properties will be omitted from the response for any days in which the user is not eligible to receive a score.
     * The `score` property represents a user's overall engagement quality. The `metrics` property provides additional scores for the input categories that contribute to that overall score. All scores range from `1` to `5` with a higher number representing better engagement quality.
     * See [**SendGrid Engagement Quality Overview**](https://docs.sendgrid.com/api-reference/sendgrid-engagement-quality-api/overview) for more information
     */
    public function get(\SendGridSDK\GetParams\V3\Engagementquality\Scores $params): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
