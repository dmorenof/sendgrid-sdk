<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\VerifiedSenders\ById;

final class PatchStatus403Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'errors',
    ];

    public \SendGridSDK\Collections\Errors\V3\VerifiedSenders\ById\PatchStatus403\PatchStatus403ErrorsCollection $errors;
}
