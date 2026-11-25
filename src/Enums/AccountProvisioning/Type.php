<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\AccountProvisioning;

enum Type: string
{
    case Addon = 'addon';
    case Package = 'package';
}
