<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\VerifiedSenders\Resend\ById;

final class PostStatus400Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'errors',
    ];

    public \SendGridSDK\Collections\Errors\V3\VerifiedSenders\Resend\ById\PostStatus400\PostStatus400ErrorsCollection $errors;
}
