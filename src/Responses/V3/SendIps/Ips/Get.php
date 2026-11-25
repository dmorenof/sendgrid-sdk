<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\SendIps\Ips;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Responses\V3\SendIps\Ips\Get\IpsMetadataResponse $_metadata;
    public \SendGridSDK\Collections\V3\SendIps\Ips\Get\IpsResultCollection $result;
}
