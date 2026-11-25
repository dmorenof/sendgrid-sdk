<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Messages\Download\ByDownloadUuid;

final class GetStatus404Response extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Collections\Errors\V3\Messages\Download\ByDownloadUuid\GetStatus404\GetStatus404ErrorsCollection $errors;
}
