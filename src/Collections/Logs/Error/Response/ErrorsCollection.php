<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Logs\Error\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\Logs\Error> */
final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Logs\Error::class;
}
