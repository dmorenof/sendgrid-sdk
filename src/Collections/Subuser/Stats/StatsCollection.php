<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Subuser\Stats;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\Subuser\Stats\StatsDTO> */
final class StatsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Subuser\Stats\StatsDTO::class;
}
