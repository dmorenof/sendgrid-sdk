<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Alerts;

enum Type1: string
{
    case StatsNotification = 'stats_notification';
    case UsageLimit = 'usage_limit';
}
