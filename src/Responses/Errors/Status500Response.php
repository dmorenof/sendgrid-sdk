<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors;

final class Status500Response extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Collections\Errors\Status500\Status500ErrorsCollection $errors;
}
