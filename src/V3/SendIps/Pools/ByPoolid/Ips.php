<?php

declare(strict_types=1);

namespace SendGridSDK\V3\SendIps\Pools\ByPoolid;

final class Ips extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/send_ips/pools/{poolid}/ips [operationId: ListIpAssignedToIpPool] */
    /**
     * Get IPs Assigned to an IP Pool
     *
     * This operation returns the IP addresses that are assigned to the specified IP pool.
     */
    public static function get(string $poolid, ?\SendGridSDK\GetParams\V3\SendIps\Pools\ByPoolid\Ips $params = null): \SendGridSDK\Responses\V3\SendIps\Pools\ByPoolid\Ips\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Pools\ByPoolid\Ips::class)->get($poolid, $params);
    }
}
