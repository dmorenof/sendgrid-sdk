<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Mc\TestError\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\Mc\TestError\Response\ErrorsDTO> */
final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Mc\TestError\Response\ErrorsDTO::class;
}
