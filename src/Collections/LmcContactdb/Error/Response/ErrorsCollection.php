<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\LmcContactdb\Error\Response;

final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\LmcContactdb\Error\Response\ErrorsDTO::class;
}
