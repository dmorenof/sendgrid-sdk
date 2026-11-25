<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Templates;

final class GetStatus400Response extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Collections\Errors\V3\Templates\GetStatus400\GetStatus400ErrorsCollection $errors;
}
