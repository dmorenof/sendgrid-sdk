<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Field;

enum Type: string
{
    case Date = 'Date';
    case Number = 'Number';
    case Text = 'Text';
}
