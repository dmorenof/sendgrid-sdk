<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Mc;

enum StatsAggregatedBy: string
{
    case Day = 'day';
    case Total = 'total';
}
