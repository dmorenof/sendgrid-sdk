<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum Generations: string
{
    case Dynamic = 'dynamic';
    case Legacy = 'legacy';
    case Legacydynamic = 'legacy,dynamic';
}
