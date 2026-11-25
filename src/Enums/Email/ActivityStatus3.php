<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Email;

enum ActivityStatus3: string
{
    case Delivered = 'delivered';
    case NotDelivered = 'not_delivered';
    case Processed = 'processed';
}
