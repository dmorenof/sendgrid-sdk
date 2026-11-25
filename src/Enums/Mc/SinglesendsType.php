<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Mc;

enum SinglesendsType: string
{
    case Content = 'content';
    case Subject = 'subject';
}
