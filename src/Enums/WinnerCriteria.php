<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum WinnerCriteria: string
{
    case Click = 'click';
    case Manual = 'manual';
    case Open = 'open';
}
