<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Whitelabel\Links\ById\Validate;

final class PostStatus500Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'errors',
    ];

    /**
     * The reasons why the validation failed.
     */
    public \SendGridSDK\Collections\Errors\V3\Whitelabel\Links\ById\Validate\PostStatus500\PostStatus500ErrorsCollection $errors;
}
