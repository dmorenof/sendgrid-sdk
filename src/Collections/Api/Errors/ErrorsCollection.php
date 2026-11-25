<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Api\Errors;

final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Api\Error::class;
}
