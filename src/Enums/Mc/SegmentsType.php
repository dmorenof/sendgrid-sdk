<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Mc;

enum SegmentsType: string
{
    case Automation = 'automation';
    case SingleSend = 'single_send';
}
