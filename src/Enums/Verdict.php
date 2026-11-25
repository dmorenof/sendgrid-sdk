<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum Verdict: string
{
    case Invalid = 'Invalid';
    case Risky = 'Risky';
    case Valid = 'Valid';
}
