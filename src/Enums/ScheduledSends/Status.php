<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\ScheduledSends;

enum Status: string
{
    case Cancel = 'cancel';
    case Pause = 'pause';
}
