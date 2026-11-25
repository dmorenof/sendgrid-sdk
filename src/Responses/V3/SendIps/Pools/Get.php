<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\SendIps\Pools;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Responses\V3\SendIps\Pools\Get\PoolsMetadataResponse $_metadata;
    public \SendGridSDK\Collections\V3\SendIps\Pools\Get\PoolsResultCollection $result;
}
