<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\ScheduledSends\Error\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\ScheduledSends\Error\Response\ErrorsDTO> */
final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\ScheduledSends\Error\Response\ErrorsDTO::class;
}
