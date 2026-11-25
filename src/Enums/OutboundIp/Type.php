<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\OutboundIp;

enum Type: string
{
    case Dedicated = 'dedicated';
    case Shared = 'shared';
}
