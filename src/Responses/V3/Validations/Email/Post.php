<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Validations\Email;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'result',
    ];

    public \SendGridSDK\Responses\V3\Validations\Email\Post\EmailResultResponse $result;
}
