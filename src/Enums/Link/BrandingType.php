<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Link;

enum BrandingType: string
{
    case Cname = 'cname';
    case Mx = 'mx';
    case Txt = 'txt';
}
