<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum State: string
{
    case Activated = 'activated';
    case Banned = 'banned';
    case Deactivated = 'deactivated';
    case Indeterminate = 'indeterminate';
    case Suspended = 'suspended';
}
