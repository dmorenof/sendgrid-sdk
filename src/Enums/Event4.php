<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum Event4: string
{
    case CancelDrop = 'cancel_drop';
    case Dropped = 'dropped';
}
