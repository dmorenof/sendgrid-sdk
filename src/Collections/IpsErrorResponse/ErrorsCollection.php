<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\IpsErrorResponse;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\IpsErrorResponse\ErrorsDTO> */
final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\IpsErrorResponse\ErrorsDTO::class;
}
