<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum Type3: string
{
    case StatsNotification = 'stats_notification';
    case UsageLimit = 'usage_limit';
}
