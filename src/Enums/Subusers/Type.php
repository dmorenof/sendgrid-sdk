<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Subusers;

enum Type: string
{
    case Nonrecurring = 'nonrecurring';
    case Recurring = 'recurring';
    case Unlimited = 'unlimited';
}
