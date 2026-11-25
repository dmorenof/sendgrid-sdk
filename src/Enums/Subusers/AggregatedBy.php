<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Subusers;

enum AggregatedBy: string
{
    case Day = 'day';
    case Month = 'month';
    case Week = 'week';
}
