<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Mc\StatsError\Response;

final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Mc\StatsError\Response\ErrorsDTO::class;
}
