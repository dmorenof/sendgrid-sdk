<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Email;

enum ValidationFileType: string
{
    case Csv = 'csv';
    case Zip = 'zip';
}
