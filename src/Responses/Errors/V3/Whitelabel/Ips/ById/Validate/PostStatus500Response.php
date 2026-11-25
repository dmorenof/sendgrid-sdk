<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Whitelabel\Ips\ById\Validate;

final class PostStatus500Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'errors',
    ];

    /**
     * The error messages for the failed validation.
     */
    public \SendGridSDK\Collections\Errors\V3\Whitelabel\Ips\ById\Validate\PostStatus500\PostStatus500ErrorsCollection $errors;
}
