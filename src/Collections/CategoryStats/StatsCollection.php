<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\CategoryStats;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\CategoryStats\StatsDTO> */
final class StatsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\CategoryStats\StatsDTO::class;
}
