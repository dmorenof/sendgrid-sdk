<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing\Segments;

final class Resource20 extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/marketing/segments/2.0',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\ErrorsSegmentV2',
            404 => null,
            500 => '\\SendGridSDK\\DTOs\\ErrorsSegmentV2',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\ErrorsSegmentV2',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\DTOs\\ErrorsSegmentV2',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\AllSegments200',
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
    public function get(?\SendGridSDK\GetParams\V3\Marketing\Segments\Resource20 $params = null): \SendGridSDK\DTOs\AllSegments200
    {
        /** @var \SendGridSDK\DTOs\AllSegments200 $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/marketing/segments/2.0',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\ErrorsSegmentV2',
            404 => null,
            429 => null,
            500 => '\\SendGridSDK\\DTOs\\ErrorsSegmentV2',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\ErrorsSegmentV2',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            429 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\DTOs\\ErrorsSegmentV2',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Segment2xx',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Segment\\WriteV2',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create Segment
     *
     * Segment `name` has to be unique. A user can not create a new segment with an existing segment name.
     */
    public function post(?\SendGridSDK\DTOs\Segment\WriteV2 $payload = null): \SendGridSDK\DTOs\Segment2xx
    {
        /** @var \SendGridSDK\DTOs\Segment2xx $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

    private const array DELETE_BY_SEGMENT_ID = [
        'method' => 'DELETE',
        'path' => '/v3/marketing/segments/2.0/{segment_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            202,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Mc\\Segments20SegmentDeleteConflict',
            404 => null,
            500 => '\\SendGridSDK\\DTOs\\ErrorsSegmentV2',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\Segments20SegmentDeleteConflict',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\DTOs\\ErrorsSegmentV2',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete segment
     *
     * **This endpoint allows you to delete a segment by ID.**
     */
    public function deleteBySegmentId(string $segment_id): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_SEGMENT_ID), path: ['segment_id' => $segment_id]);
        return;
    }

    private const array GET_BY_SEGMENT_ID = [
        'method' => 'GET',
        'path' => '/v3/marketing/segments/2.0/{segment_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\ErrorsSegmentV2',
            500 => '\\SendGridSDK\\DTOs\\ErrorsSegmentV2',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\ErrorsSegmentV2',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\DTOs\\ErrorsSegmentV2',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Segment2xx',
    ];

    /**
     * Get Segment by ID
     *
     * Get Marketing Campaigns Segment by ID
     */
    public function getBySegmentId(string $segment_id, ?\SendGridSDK\GetParams\V3\Marketing\Segments\Resource20\BySegmentId $params = null): \SendGridSDK\DTOs\Segment2xx
    {
        /** @var \SendGridSDK\DTOs\Segment2xx $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SEGMENT_ID), path: ['segment_id' => $segment_id], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_SEGMENT_ID = [
        'method' => 'PATCH',
        'path' => '/v3/marketing/segments/2.0/{segment_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\ErrorsSegmentV2',
            429 => null,
            500 => '\\SendGridSDK\\DTOs\\ErrorsSegmentV2',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\ErrorsSegmentV2',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\DTOs\\ErrorsSegmentV2',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Segment2xx',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Segment\\Update',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update Segment
     *
     * Segment `name` has to be unique. A user can not create a new segment with an existing segment name.
     */
    public function patchBySegmentId(string $segment_id, ?\SendGridSDK\DTOs\Segment\Update $payload = null): \SendGridSDK\DTOs\Segment2xx
    {
        /** @var \SendGridSDK\DTOs\Segment2xx $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::PATCH_BY_SEGMENT_ID), $payload, path: ['segment_id' => $segment_id]) : $this->executeArguments(self::operation(self::PATCH_BY_SEGMENT_ID), path: ['segment_id' => $segment_id]);
        return $result;
    }
}
