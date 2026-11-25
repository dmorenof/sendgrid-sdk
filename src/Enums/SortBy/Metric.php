<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\SortBy;

enum Metric: string
{
    case Blocks = 'blocks';
    case Bounces = 'bounces';
    case Clicks = 'clicks';
    case Delivered = 'delivered';
    case Opens = 'opens';
    case Requests = 'requests';
    case UniqueClicks = 'unique_clicks';
    case UniqueOpens = 'unique_opens';
    case Unsubscribes = 'unsubscribes';
}
