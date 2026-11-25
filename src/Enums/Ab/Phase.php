<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Ab;

enum Phase: string
{
    case All = 'all';
    case Send = 'send';
    case Test = 'test';
}
