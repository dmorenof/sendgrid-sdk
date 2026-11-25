<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Contactdb\Segments;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\Contactdb\SegmentsConditions> */
final class ConditionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Contactdb\SegmentsConditions::class;
}
