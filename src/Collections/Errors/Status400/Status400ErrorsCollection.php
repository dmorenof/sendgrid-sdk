<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Errors\Status400;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\Responses\Errors\Status400\ErrorsItemResponse> */
final class Status400ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\Responses\Errors\Status400\ErrorsItemResponse::class;
}
