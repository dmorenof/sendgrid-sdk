<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum Accept: string
{
    case Applicationjson = 'application/json';
    case Textcsv = 'text/csv';
}
