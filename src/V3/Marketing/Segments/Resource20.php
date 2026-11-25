<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing\Segments;

final class Resource20 extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/marketing/segments/2.0 [operationId: ListSegmentMcSegments20] */
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
    public static function get(?\SendGridSDK\GetParams\V3\Marketing\Segments\Resource20 $params = null): \SendGridSDK\DTOs\AllSegments200
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Segments\Resource20::class)->get($params);
    }

    /** POST /v3/marketing/segments/2.0 [operationId: CreateSegmentMcSegments20] */
    /**
     * Create Segment
     *
     * Segment `name` has to be unique. A user can not create a new segment with an existing segment name.
     */
    public static function post(?\SendGridSDK\DTOs\Segment\WriteV2 $payload = null): \SendGridSDK\DTOs\Segment2xx
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Segments\Resource20::class)->post();
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Segments\Resource20::class)->post($payload);
    }

    /** DELETE /v3/marketing/segments/2.0/{segment_id} [operationId: DeleteSegmentMcSegments20] */
    /**
     * Delete segment
     *
     * **This endpoint allows you to delete a segment by ID.**
     */
    public static function deleteBySegmentId(string $segment_id): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Segments\Resource20::class)->deleteBySegmentId($segment_id);
    }

    /** GET /v3/marketing/segments/2.0/{segment_id} [operationId: GetSegmentMcSegments20] */
    /**
     * Get Segment by ID
     *
     * Get Marketing Campaigns Segment by ID
     */
    public static function getBySegmentId(string $segment_id, ?\SendGridSDK\GetParams\V3\Marketing\Segments\Resource20\BySegmentId $params = null): \SendGridSDK\DTOs\Segment2xx
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Segments\Resource20::class)->getBySegmentId($segment_id, $params);
    }

    /** PATCH /v3/marketing/segments/2.0/{segment_id} [operationId: UpdateSegmentMcSegments20] */
    /**
     * Update Segment
     *
     * Segment `name` has to be unique. A user can not create a new segment with an existing segment name.
     */
    public static function patchBySegmentId(string $segment_id, ?\SendGridSDK\DTOs\Segment\Update $payload = null): \SendGridSDK\DTOs\Segment2xx
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Segments\Resource20::class)->patchBySegmentId($segment_id);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Segments\Resource20::class)->patchBySegmentId($segment_id, $payload);
    }
}
