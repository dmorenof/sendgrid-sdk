<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\ScopesErrorResponse;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\ScopesErrorResponse\ErrorsDTO> */
final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\ScopesErrorResponse\ErrorsDTO::class;
}
