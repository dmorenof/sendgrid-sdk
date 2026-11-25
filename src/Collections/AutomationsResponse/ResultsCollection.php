<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\AutomationsResponse;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\AutomationsResponse\ResultsDTO> */
final class ResultsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\AutomationsResponse\ResultsDTO::class;
}
