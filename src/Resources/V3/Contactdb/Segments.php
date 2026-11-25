<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Contactdb;

final class Segments extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/contactdb/segments',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Contactdb\\Segments\\Get',
    ];

    /**
     * Retrieve all segments
     *
     * **This endpoint allows you to retrieve all of your segments.**
     */
    public function get(?\SendGridSDK\GetParams\V3\Contactdb\Segments $params = null): \SendGridSDK\Responses\V3\Contactdb\Segments\Get
    {
        /** @var \SendGridSDK\Responses\V3\Contactdb\Segments\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/contactdb/segments',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
            401 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Contactdb\\SegmentsId200',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Contactdb\\Segments',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a Segment
     *
     * **This endpoint allows you to create a new segment.**
     *
     *
     *   Valid operators for create and update depend on the type of the field for which you are searching.
     *
     * **Dates**
     * - "eq", "ne", "lt" (before), "gt" (after)
     *     - You may use MM/DD/YYYY for day granularity or an epoch for second granularity.
     * - "empty", "not_empty"
     * - "is within"
     *     - You may use an [ISO 8601 date format](https://en.wikipedia.org/wiki/ISO_8601) or the # of days.
     *
     * **Text**
     * - "contains"
     * - "eq" (is/equals - matches the full field)
     * - "ne" (is not/not equals - matches any field where the entire field is not the condition value)
     * - "empty"
     * - "not_empty"
     *
     * **Numbers**
     * - "eq" (is/equals)
     * - "lt" (is less than)
     * - "gt" (is greater than)
     * - "empty"
     * - "not_empty"
     *
     * **Email Clicks and Opens**
     * - "eq" (opened)
     * - "ne" (not opened)
     *
     * All field values must be a string.
     *
     *
     * Conditions using "eq" or "ne" for email clicks and opens should provide a "field" of either `clicks.campaign_identifier` or `opens.campaign_identifier`.
     * The condition value should be a string containing the id of a completed campaign.
     *
     *
     * The conditions list may contain multiple conditions, joined by an "and" or "or" in the "and_or" field.
     *
     * The first condition in the conditions list must have an empty "and_or", and subsequent conditions must all specify an "and_or".
     */
    public function post(?\SendGridSDK\PostParams\V3\Contactdb\Segments $params = null): \SendGridSDK\DTOs\Contactdb\SegmentsId200
    {
        /** @var \SendGridSDK\DTOs\Contactdb\SegmentsId200 $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_SEGMENT_ID = [
        'method' => 'DELETE',
        'path' => '/v3/contactdb/segments/{segment_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
            401 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
            404 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete a segment
     *
     * **This endpoint allows you to delete a segment from your recipients database.**
     *
     * You also have the option to delete all the contacts from your Marketing Campaigns recipient database who were in this segment.
     */
    public function deleteBySegmentId(int $segment_id, ?\SendGridSDK\DeleteParams\V3\Contactdb\Segments\BySegmentId $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_SEGMENT_ID), path: ['segment_id' => $segment_id], parameters: $params);
        return;
    }

    private const array GET_BY_SEGMENT_ID = [
        'method' => 'GET',
        'path' => '/v3/contactdb/segments/{segment_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
            401 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
            404 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Contactdb\\Segments',
    ];

    /**
     * Retrieve a segment
     *
     * **This endpoint allows you to retrieve a single segment with the given ID.**
     */
    public function getBySegmentId(int $segment_id, ?\SendGridSDK\GetParams\V3\Contactdb\Segments\BySegmentId $params = null): \SendGridSDK\DTOs\Contactdb\Segments
    {
        /** @var \SendGridSDK\DTOs\Contactdb\Segments $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SEGMENT_ID), path: ['segment_id' => $segment_id], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_SEGMENT_ID = [
        'method' => 'PATCH',
        'path' => '/v3/contactdb/segments/{segment_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
            401 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Contactdb\\Segments',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Contactdb\\Segments\\BySegmentId\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update a segment
     *
     * **This endpoint allows you to update a segment.**
     */
    public function patchBySegmentId(int $segment_id, ?\SendGridSDK\PatchParams\V3\Contactdb\Segments\BySegmentId $params = null): \SendGridSDK\DTOs\Contactdb\Segments
    {
        /** @var \SendGridSDK\DTOs\Contactdb\Segments $result */
        $result = $this->executeArguments(self::operation(self::PATCH_BY_SEGMENT_ID), path: ['segment_id' => $segment_id], parameters: $params);
        return $result;
    }
}
