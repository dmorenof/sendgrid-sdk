<?php

declare(strict_types=1);

namespace SendGridSDK\V3\SendIps\Pools\ByPoolid;

final class IpsBatchDelete extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/send_ips/pools/{poolid}/ips:batchDelete [operationId: DeleteIpsFromIpPool] */
    /**
     * Delete a Batch of IPs from an IP Pool
     *
     * This operation removes a batch of IPs from an IP Pool. All IPs associated with the Pool will be unassigned from the deleted Pool. However, this operation does not remove the IPs from your account.
     */
    public static function post(string $poolid, ?\SendGridSDK\Requests\V3\SendIps\Pools\ByPoolid\IpsBatchDelete\Post $payload = null): void
    {
        if (func_num_args() <= 1) {
            self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Pools\ByPoolid\IpsBatchDelete::class)->post($poolid);
            return;
        }
        self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Pools\ByPoolid\IpsBatchDelete::class)->post($poolid, $payload);
    }
}
