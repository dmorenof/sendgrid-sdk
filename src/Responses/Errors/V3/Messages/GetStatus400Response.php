<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Messages;

final class GetStatus400Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'errors',
    ];

    public \SendGridSDK\Collections\Errors\V3\Messages\GetStatus400\GetStatus400ErrorsCollection $errors;
}
