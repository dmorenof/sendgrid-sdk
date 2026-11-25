<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Subuser\Stats;

final class StatsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Subuser\Stats\StatsDTO::class;
}
