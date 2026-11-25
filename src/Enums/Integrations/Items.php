<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Integrations;

enum Items: string
{
    case Bounce = 'bounce';
    case Click = 'click';
    case Deferred = 'deferred';
    case Delivered = 'delivered';
    case Drop = 'drop';
    case GroupResubscribe = 'group_resubscribe';
    case GroupUnsubscribe = 'group_unsubscribe';
    case MachineOpened = 'machine_opened';
    case Open = 'open';
    case Processed = 'processed';
    case Spamreport = 'spamreport';
    case Unsubscribe = 'unsubscribe';
}
