<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Errors\Status500;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\Responses\Errors\Status500\ErrorsItemResponse> */
final class Status500ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\Responses\Errors\Status500\ErrorsItemResponse::class;
}
