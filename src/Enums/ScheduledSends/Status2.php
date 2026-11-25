<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\ScheduledSends;

enum Status2: string
{
    case Cancel = 'cancel';
    case Pause = 'pause';
}
