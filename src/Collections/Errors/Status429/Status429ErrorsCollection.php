<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Errors\Status429;

final class Status429ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\Responses\Errors\Status429\ErrorsItemResponse::class;
}
