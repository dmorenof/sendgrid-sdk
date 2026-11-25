<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Subusers;

enum Type1: string
{
    case Nonrecurring = 'nonrecurring';
    case Recurring = 'recurring';
    case Unlimited = 'unlimited';
}
