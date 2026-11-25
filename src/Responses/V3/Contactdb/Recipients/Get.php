<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Contactdb\Recipients;

/**
 * List Recipients response
 */
final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'recipients',
    ];

    public \SendGridSDK\Collections\V3\Contactdb\Recipients\Get\RecipientsRecipientsCollection $recipients;
}
