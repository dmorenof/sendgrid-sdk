<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Errors\Status500;

final class Status500ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\Responses\Errors\Status500\ErrorsItemResponse::class;
}
