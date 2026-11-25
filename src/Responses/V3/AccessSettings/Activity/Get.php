<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\AccessSettings\Activity;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'result',
    ];

    /**
     * An array containing the IPs that recently attempted to access your account.
     */
    public \SendGridSDK\Collections\V3\AccessSettings\Activity\Get\ActivityResultCollection $result;
}
