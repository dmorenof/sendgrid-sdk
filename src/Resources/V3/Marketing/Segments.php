<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing;

final class Segments extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/marketing/segments',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\Mc\\SegmentsError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Mc\\SegmentsError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Mc\\SegmentsError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant5Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\SegmentsError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\SegmentsError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\SegmentsError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant5Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Segments\\Get',
        'querySerialization' => [
            'ids' => 'multi',
        ],
    ];

    /**
     * Get List of Segments
     *
     * **This endpoint allows you to retrieve a list of segments.**
     *
     * The query param `parent_list_ids` is treated as a filter.  Any match will be returned.  Zero matches will return a response code of 200 with an empty `results` array.
     *
     * `parent_list_ids` | `no_parent_list_id` | `ids` | `result`
     * -----------------:|:--------------------:|:-------------:|:-------------:
     * empty | false | empty | all segments values
     * list_ids | false | empty | segments filtered by list_ids values
     * list_ids |true | empty | segments filtered by list_ids and segments with no parent list_ids empty
     * empty | true | empty | segments with no parent list_ids
     * anything | anything | ids | segments with matching segment ids |
     */
    public function get(?\SendGridSDK\GetParams\V3\Marketing\Segments $params = null): \SendGridSDK\Responses\V3\Marketing\Segments\Get
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Segments\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_SEGMENT_ID = [
        'method' => 'DELETE',
        'path' => '/v3/marketing/segments/{segment_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            202,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Mc\\SegmentsSegmentDeleteConflict',
            401 => '\\SendGridSDK\\DTOs\\Mc\\SegmentsError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Mc\\SegmentsError\\Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant5Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant5Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\SegmentsSegmentDeleteConflict',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\SegmentsError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\SegmentsError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant5Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant5Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Segments\\BySegmentId\\Delete',
        'validation' => [
            'segment_id' => [
                'minLength' => 36,
                'maxLength' => 36,
            ],
        ],
    ];

    /**
     * Delete Segment
     *
     * **This endpoint allows you to delete a segment by `segment_id`.**
     *
     * Note that deleting a segment does not delete the contacts associated with the segment by default. Contacts associated with a deleted segment will remain in your list of all contacts and any other segments they belong to.
     */
    public function deleteBySegmentId(string $segment_id): \SendGridSDK\Responses\V3\Marketing\Segments\BySegmentId\Delete
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Segments\BySegmentId\Delete $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_SEGMENT_ID), path: ['segment_id' => $segment_id]);
        return $result;
    }

    private const array GET_BY_SEGMENT_ID = [
        'method' => 'GET',
        'path' => '/v3/marketing/segments/{segment_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\Mc\\SegmentsError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Mc\\SegmentsError\\Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant5Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant5Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\SegmentsError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\SegmentsError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant5Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant5Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\FullSegment',
        'validation' => [
            'segment_id' => [
                'minLength' => 36,
                'maxLength' => 36,
            ],
        ],
    ];

    /**
     * Get Segment by ID
     *
     * **This endpoint allows you to retrieve a single segment by ID.**
     */
    public function getBySegmentId(string $segment_id, ?\SendGridSDK\GetParams\V3\Marketing\Segments\BySegmentId $params = null): \SendGridSDK\DTOs\FullSegment
    {
        /** @var \SendGridSDK\DTOs\FullSegment $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SEGMENT_ID), path: ['segment_id' => $segment_id], parameters: $params);
        return $result;
    }
}
