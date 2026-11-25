<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Ips\Warmup\ByIpAddress;

final class GetStatus404Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The errors that were encountered.
     */
    public \SendGridSDK\Collections\Errors\V3\Ips\Warmup\ByIpAddress\GetStatus404\GetStatus404ErrorsCollection $errors;
}
