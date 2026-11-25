<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors;

final class Status404Variant11Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'errors',
    ];

    public \SendGridSDK\Collections\Errors\Status404Variant11\Status404Variant11ErrorsCollection $errors;
}
