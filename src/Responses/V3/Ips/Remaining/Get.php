<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Ips\Remaining;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'results',
    ];

    public \SendGridSDK\Collections\V3\Ips\Remaining\Get\RemainingResultsCollection $results;
}
