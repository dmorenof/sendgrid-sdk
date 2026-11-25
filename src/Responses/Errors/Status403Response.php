<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors;

final class Status403Response extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Collections\Errors\Status403\Status403ErrorsCollection $errors;
}
