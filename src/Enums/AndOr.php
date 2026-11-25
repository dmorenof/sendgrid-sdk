<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum AndOr: string
{
    case Empty_ = '';
    case And_ = 'and';
    case Or_ = 'or';
}
