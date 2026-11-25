<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * errors-seg
 *
 * If the request is incorrect, an array of errors will be returned.
 */
final class ErrorsSegmentV2 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'errors',
    ];

    public \SendGridSDK\Collections\ErrorsSegmentV2\ErrorsCollection $errors;
}
