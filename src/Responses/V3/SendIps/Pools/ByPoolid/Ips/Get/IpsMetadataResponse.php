<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\SendIps\Pools\ByPoolid\Ips\Get;

final class IpsMetadataResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A collection of fields that can be used to work the endpoint.
     */
    public \SendGridSDK\Responses\V3\SendIps\Pools\ByPoolid\Ips\Get\Metadata\NextParamsResponse $next_params;
}
