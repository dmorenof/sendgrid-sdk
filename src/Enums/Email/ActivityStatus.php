<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Email;

enum ActivityStatus: string
{
    case Delivered = 'delivered';
    case NotDelivered = 'not_delivered';
    case Processed = 'processed';
}
