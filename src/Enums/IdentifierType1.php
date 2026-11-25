<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum IdentifierType1: string
{
    case AnonymousId = 'anonymous_id';
    case Email = 'email';
    case ExternalId = 'external_id';
    case PhoneNumberId = 'phone_number_id';
}
