<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\LmcContactdb;

enum Status: string
{
    case Failure = 'failure';
    case Pending = 'pending';
    case Ready = 'ready';
}
