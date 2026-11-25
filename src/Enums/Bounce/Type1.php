<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Bounce;

enum Type1: string
{
    case Hard = 'hard';
    case Soft = 'soft';
}
