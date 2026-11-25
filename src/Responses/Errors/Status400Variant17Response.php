<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors;

final class Status400Variant17Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'errors',
    ];

    public \SendGridSDK\Collections\Errors\Status400Variant17\Status400Variant17ErrorsCollection $errors;
}
