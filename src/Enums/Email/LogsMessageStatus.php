<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Email;

enum LogsMessageStatus: string
{
    case Blocked = 'blocked';
    case Bounced = 'bounced';
    case Deferred = 'deferred';
    case Delivered = 'delivered';
    case Dropped = 'dropped';
    case Processed = 'processed';
}
