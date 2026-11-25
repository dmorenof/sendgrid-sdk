<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors;

final class Status429Response extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Collections\Errors\Status429\Status429ErrorsCollection $errors;
}
