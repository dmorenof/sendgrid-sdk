<?php

declare(strict_types=1);

namespace SendGridSDK\Enums;

enum Classification: string
{
    case Content = 'Content';
    case FrequencyOrVolumeTooHigh = 'Frequency or Volume Too High';
    case InvalidAddress = 'Invalid Address';
    case MailboxUnavailable = 'Mailbox Unavailable';
    case Reputation = 'Reputation';
    case TechnicalFailure = 'Technical Failure';
    case Unclassified = 'Unclassified';
}
