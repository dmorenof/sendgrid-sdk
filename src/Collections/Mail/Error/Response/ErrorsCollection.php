<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Mail\Error\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\Mail\Error\Response\ErrorsDTO> */
final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Mail\Error\Response\ErrorsDTO::class;
}
