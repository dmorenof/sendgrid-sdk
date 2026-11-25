<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\ErrorsSegmentV2;

final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\ErrorsSegmentV2\ErrorsDTO::class;
}
