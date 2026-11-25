<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum Type2: string
{
    case StatsNotification = 'stats_notification';
    case UsageLimit = 'usage_limit';
}
