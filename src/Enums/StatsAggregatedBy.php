<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum StatsAggregatedBy: string
{
    case Day = 'day';
    case Month = 'month';
    case Week = 'week';
}
