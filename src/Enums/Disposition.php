<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum Disposition: string
{
    case Attachment = 'attachment';
    case Inline = 'inline';
}
