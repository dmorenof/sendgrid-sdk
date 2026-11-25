<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\VerifiedSenders\Domains;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'results',
    ];

    public \SendGridSDK\Responses\V3\VerifiedSenders\Domains\Get\DomainsResultsResponse $results;
}
