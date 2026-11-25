<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Marketing\Lists\ById;

final class DeleteStatus404Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'errors',
    ];

    public \SendGridSDK\Collections\Errors\V3\Marketing\Lists\ById\DeleteStatus404\DeleteStatus404ErrorsCollection $errors;
}
