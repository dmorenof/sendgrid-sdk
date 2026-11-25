<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Ab;

enum PhaseId: string
{
    case Send = 'send';
    case Test = 'test';
}
