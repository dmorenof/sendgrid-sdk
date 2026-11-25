<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Logs;

enum BounceType: string
{
    case Blocked = 'blocked';
    case Bounce = 'bounce';
}
