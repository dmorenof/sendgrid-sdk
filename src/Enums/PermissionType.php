<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum PermissionType: string
{
    case Admin = 'admin';
    case Restricted = 'restricted';
}
