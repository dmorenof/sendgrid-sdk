<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\V3\Marketing\Segments\Get;

final class SegmentsResultsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Segment\Summary::class;
    protected const array COLLECTION_VALIDATION = [
        'uniqueItems' => true,
    ];
}
