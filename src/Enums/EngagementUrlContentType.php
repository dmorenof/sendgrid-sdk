<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum EngagementUrlContentType: string
{
    case Amp = 'amp';
    case Header = 'header';
    case Html = 'html';
    case Text = 'text';
}
