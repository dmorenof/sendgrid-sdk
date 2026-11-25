<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum ResetFrequency1: string
{
    case Daily = 'daily';
    case Monthly = 'monthly';
    case Weekly = 'weekly';
}
