<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Alerts\Error\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\Alerts\Error\Response\ErrorsDTO> */
final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Alerts\Error\Response\ErrorsDTO::class;
}
