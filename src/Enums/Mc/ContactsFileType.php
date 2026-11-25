<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Mc;

enum ContactsFileType: string
{
    case Csv = 'csv';
    case Json = 'json';
}
