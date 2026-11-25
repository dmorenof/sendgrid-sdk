<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Asm\Suppressions\ByEmail;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'suppressions',
    ];

    /**
     * The array of suppression groups.
     */
    public \SendGridSDK\Collections\V3\Asm\Suppressions\ByEmail\Get\ByEmailSuppressionsCollection $suppressions;
}
