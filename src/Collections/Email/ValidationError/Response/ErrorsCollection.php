<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Email\ValidationError\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\Email\ValidationError\Response\ErrorsDTO> */
final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Email\ValidationError\Response\ErrorsDTO::class;
}
