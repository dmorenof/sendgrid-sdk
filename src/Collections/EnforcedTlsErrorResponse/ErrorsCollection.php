<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\EnforcedTlsErrorResponse;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\EnforcedTlsErrorResponse\ErrorsDTO> */
final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\EnforcedTlsErrorResponse\ErrorsDTO::class;
}
