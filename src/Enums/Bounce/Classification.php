<?php

declare(strict_types=1);

namespace SendGridSDK\Enums\Bounce;

enum Classification: string
{
    case Content = 'Content';
    case FrequencyOrVolumeTooHigh = 'Frequency or Volume Too High';
    case InvalidAddress = 'Invalid Address';
    case MailboxUnavailable = 'Mailbox Unavailable';
    case Reputation = 'Reputation';
    case Technical = 'Technical';
    case Unclassified = 'Unclassified';
}
