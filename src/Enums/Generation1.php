<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum Generation1: string
{
    case Dynamic = 'dynamic';
    case Legacy = 'legacy';
}
