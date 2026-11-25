<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors;

final class Status400Variant6Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'errors',
    ];

    public \SendGridSDK\Collections\Errors\Status400Variant6\Status400Variant6ErrorsCollection $errors;
}
