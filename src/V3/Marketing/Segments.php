<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing;

final class Segments extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/marketing/segments [operationId: ListSegmentMcSegments] */
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
    public static function get(?\SendGridSDK\GetParams\V3\Marketing\Segments $params = null): \SendGridSDK\Responses\V3\Marketing\Segments\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Segments::class)->get($params);
    }

    /** DELETE /v3/marketing/segments/{segment_id} [operationId: DeleteSegmentMcSegments] */
    /**
     * Delete Segment
     *
     * **This endpoint allows you to delete a segment by `segment_id`.**
     *
     * Note that deleting a segment does not delete the contacts associated with the segment by default. Contacts associated with a deleted segment will remain in your list of all contacts and any other segments they belong to.
     */
    public static function deleteBySegmentId(string $segment_id): \SendGridSDK\Responses\V3\Marketing\Segments\BySegmentId\Delete
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Segments::class)->deleteBySegmentId($segment_id);
    }

    /** GET /v3/marketing/segments/{segment_id} [operationId: GetSegmentMcSegments] */
    /**
     * Get Segment by ID
     *
     * **This endpoint allows you to retrieve a single segment by ID.**
     */
    public static function getBySegmentId(string $segment_id, ?\SendGridSDK\GetParams\V3\Marketing\Segments\BySegmentId $params = null): \SendGridSDK\DTOs\FullSegment
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Segments::class)->getBySegmentId($segment_id, $params);
    }
}
