<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Api\KeysError\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\Api\KeysError\Response\ErrorsDTO> */
final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Api\KeysError\Response\ErrorsDTO::class;
}
