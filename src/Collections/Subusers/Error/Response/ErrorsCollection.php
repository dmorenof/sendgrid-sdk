<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Subusers\Error\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\Subusers\Error\Response\ErrorsDTO> */
final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Subusers\Error\Response\ErrorsDTO::class;
}
