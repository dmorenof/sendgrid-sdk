<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Errors\Status403;

final class Status403ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\Responses\Errors\Status403\ErrorsItemResponse::class;
}
