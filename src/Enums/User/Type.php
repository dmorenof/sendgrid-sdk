<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\User;

enum Type: string
{
    case Admin = 'admin';
    case Owner = 'owner';
    case Teammate = 'teammate';
}
