<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Email;

enum ActivityBounceType: string
{
    case Hard = 'hard';
    case Soft = 'soft';
}
