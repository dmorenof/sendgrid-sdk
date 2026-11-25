<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\SinglesendsResponse;

final class ResultsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\SinglesendsResponse\ResultsDTO::class;
}
