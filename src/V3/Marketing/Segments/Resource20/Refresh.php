<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing\Segments\Resource20;

final class Refresh extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/marketing/segments/2.0/refresh/{segment_id} [operationId: RefreshSegment] */
    /**
     * Manually refresh a segment
     *
     * Manually refresh a segment by segment ID.
     */
    public static function postBySegmentId(string $segment_id, \SendGridSDK\DTOs\Segment\Refresh\Request $payload): \SendGridSDK\DTOs\Segment\Refresh202
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Segments\Resource20\Refresh::class)->postBySegmentId($segment_id, $payload);
    }
}
