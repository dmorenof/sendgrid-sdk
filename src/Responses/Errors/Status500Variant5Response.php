<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors;

final class Status500Variant5Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'errors',
    ];

    public \SendGridSDK\Collections\Errors\Status500Variant5\Status500Variant5ErrorsCollection $errors;
}
