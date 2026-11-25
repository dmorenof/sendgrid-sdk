<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum PermissionType1: string
{
    case Admin = 'admin';
    case Restricted = 'restricted';
}
