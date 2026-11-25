<?php

declare(strict_types=1);

namespace SendGridSDK\V3\SendIps\Pools\ByPoolid;

final class IpsBatchAdd extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/send_ips/pools/{poolid}/ips:batchAdd [operationId: AddIpsToIpPool] */
    /**
     * Add a Batch of IPs to an IP Pool
     *
     * This operation appends a batch of IPs to an IP Pool. This operation requires all IP assignments to succeed. If any IP assignments fail, this endpoint will return an error.
     */
    public static function post(string $poolid, ?\SendGridSDK\Requests\V3\SendIps\Pools\ByPoolid\IpsBatchAdd\Post $payload = null): \SendGridSDK\Responses\V3\SendIps\Pools\ByPoolid\IpsBatchAdd\Post
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Pools\ByPoolid\IpsBatchAdd::class)->post($poolid);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Pools\ByPoolid\IpsBatchAdd::class)->post($poolid, $payload);
    }
}
