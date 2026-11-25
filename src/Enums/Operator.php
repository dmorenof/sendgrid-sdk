<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum Operator: string
{
    case Contains = 'contains';
    case Eq = 'eq';
    case Gt = 'gt';
    case Lt = 'lt';
    case Ne = 'ne';
}
