<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum IdentifierType: string
{
    case ANONYMOUSID = 'ANONYMOUSID';
    case EMAIL = 'EMAIL';
    case EXTERNALID = 'EXTERNALID';
    case PHONENUMBERID = 'PHONENUMBERID';
}
