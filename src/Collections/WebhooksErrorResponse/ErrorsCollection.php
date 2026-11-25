<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\WebhooksErrorResponse;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\WebhooksErrorResponse\ErrorsDTO> */
final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\WebhooksErrorResponse\ErrorsDTO::class;
}
