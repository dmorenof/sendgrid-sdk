<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Email;

enum ValidationStatus1: string
{
    case Done = 'Done';
    case Error = 'Error';
    case Initiated = 'Initiated';
    case Processing = 'Processing';
    case Queued = 'Queued';
    case Ready = 'Ready';
}
