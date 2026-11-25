<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum WebhooksAggregatedBy: string
{
    case Day = 'day';
    case Month = 'month';
    case Week = 'week';
}
