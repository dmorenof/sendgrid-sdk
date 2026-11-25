<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Mc;

/**
 * segment_delete_conflict
 *
 * Returned when a segment cannot be deleted. A single error is returned however many kinds of resource are using the segment.
 * Example: {"errors":[{"field":"segment_id","message":"Segment cannot be deleted because it is used by other resources.","resources":[{"type":"automation","ids":["13646eaf-c57d-4fd4-9b1b-7d22ecb4db4e"]},{"type":"single_send","ids":["f7deb9ea-92a3-11f1-ab0a-c2a00ce2124b"]}]}]}
 */
final class Segments20SegmentDeleteConflict extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'errors',
    ];

    public \SendGridSDK\Collections\Mc\Segments20SegmentDeleteConflict\ErrorsCollection $errors;
}
