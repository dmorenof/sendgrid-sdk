<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\LmcContactdb;

enum Type: string
{
    case Date = 'date';
    case Number = 'number';
    case Text = 'text';
}
