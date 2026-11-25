<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Contactdb\Segments\BySegmentId;

final class Recipients extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/contactdb/segments/{segment_id}/recipients [operationId: ListRecipientForSegment] */
    /**
     * Retrieve recipients on a segment
     *
     * **This endpoint allows you to retrieve all of the recipients in a segment with the given ID.**
     */
    public static function get(int $segment_id, ?\SendGridSDK\GetParams\V3\Contactdb\Segments\BySegmentId\Recipients $params = null): \SendGridSDK\Responses\V3\Contactdb\Segments\BySegmentId\Recipients\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Segments\BySegmentId\Recipients::class)->get($segment_id, $params);
    }
}
