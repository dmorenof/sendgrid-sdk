<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum Generation: string
{
    case Dynamic = 'dynamic';
    case Legacy = 'legacy';
}
