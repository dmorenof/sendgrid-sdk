<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Mc;

enum SinglesendsStatus2: string
{
    case Draft = 'draft';
    case Scheduled = 'scheduled';
    case Triggered = 'triggered';
}
