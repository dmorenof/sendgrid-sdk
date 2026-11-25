<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Mc\SendersError\Response;

final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Mc\SendersError\Response\ErrorsDTO::class;
}
