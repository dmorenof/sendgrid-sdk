<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors;

final class Status400Response extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Collections\Errors\Status400\Status400ErrorsCollection $errors;
}
