<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum EventName1: string
{
    case Bounced = 'bounced';
    case Clicked = 'clicked';
    case Deferred = 'deferred';
    case Delivered = 'delivered';
    case Dropped = 'dropped';
    case GroupResubscribe = 'group_resubscribe';
    case GroupUnsubscribe = 'group_unsubscribe';
    case Opened = 'opened';
    case Processed = 'processed';
    case SpamReport = 'spam_report';
    case Unsubscribe = 'unsubscribe';
}
