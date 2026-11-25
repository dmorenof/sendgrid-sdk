<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors;

final class Status404Variant5Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'errors',
    ];

    public \SendGridSDK\Collections\Errors\Status404Variant5\Status404Variant5ErrorsCollection $errors;
}
