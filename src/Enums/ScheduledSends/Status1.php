<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\ScheduledSends;

enum Status1: string
{
    case Cancel = 'cancel';
    case Pause = 'pause';
}
