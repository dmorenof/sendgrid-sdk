<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum ClientType: string
{
    case Desktop = 'desktop';
    case Phone = 'phone';
    case Tablet = 'tablet';
    case Webmail = 'webmail';
}
