<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum Persona: string
{
    case Accountant = 'accountant';
    case Developer = 'developer';
    case Marketer = 'marketer';
    case Observer = 'observer';
}
