<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Mc;

enum ContactsStatus: string
{
    case Failure = 'failure';
    case Pending = 'pending';
    case Ready = 'ready';
}
