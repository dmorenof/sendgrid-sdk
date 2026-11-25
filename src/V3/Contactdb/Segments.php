<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Contactdb;

final class Segments extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/contactdb/segments [operationId: ListSegment] */
    /**
     * Retrieve all segments
     *
     * **This endpoint allows you to retrieve all of your segments.**
     */
    public static function get(?\SendGridSDK\GetParams\V3\Contactdb\Segments $params = null): \SendGridSDK\Responses\V3\Contactdb\Segments\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Segments::class)->get($params);
    }

    /** POST /v3/contactdb/segments [operationId: CreateSegment] */
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
    public static function post(?\SendGridSDK\PostParams\V3\Contactdb\Segments $params = null): \SendGridSDK\DTOs\Contactdb\SegmentsId200
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Segments::class)->post($params);
    }

    /** DELETE /v3/contactdb/segments/{segment_id} [operationId: DeleteSegment] */
    /**
     * Delete a segment
     *
     * **This endpoint allows you to delete a segment from your recipients database.**
     *
     * You also have the option to delete all the contacts from your Marketing Campaigns recipient database who were in this segment.
     */
    public static function deleteBySegmentId(int $segment_id, ?\SendGridSDK\DeleteParams\V3\Contactdb\Segments\BySegmentId $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Segments::class)->deleteBySegmentId($segment_id, $params);
    }

    /** GET /v3/contactdb/segments/{segment_id} [operationId: GetSegment] */
    /**
     * Retrieve a segment
     *
     * **This endpoint allows you to retrieve a single segment with the given ID.**
     */
    public static function getBySegmentId(int $segment_id, ?\SendGridSDK\GetParams\V3\Contactdb\Segments\BySegmentId $params = null): \SendGridSDK\DTOs\Contactdb\Segments
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Segments::class)->getBySegmentId($segment_id, $params);
    }

    /** PATCH /v3/contactdb/segments/{segment_id} [operationId: UpdateSegment] */
    /**
     * Update a segment
     *
     * **This endpoint allows you to update a segment.**
     */
    public static function patchBySegmentId(int $segment_id, ?\SendGridSDK\PatchParams\V3\Contactdb\Segments\BySegmentId $params = null): \SendGridSDK\DTOs\Contactdb\Segments
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Segments::class)->patchBySegmentId($segment_id, $params);
    }
}
