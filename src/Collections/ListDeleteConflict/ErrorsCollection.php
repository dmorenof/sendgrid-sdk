<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\ListDeleteConflict;

final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\ListDeleteConflict\ErrorsDTO::class;
}
