<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Verified\SendersError\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\Verified\SendersError\Response\ErrorsDTO> */
final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Verified\SendersError\Response\ErrorsDTO::class;
}
