<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Mc;

enum SinglesendsItems: string
{
    case Draft = 'draft';
    case Scheduled = 'scheduled';
    case Triggered = 'triggered';
}
