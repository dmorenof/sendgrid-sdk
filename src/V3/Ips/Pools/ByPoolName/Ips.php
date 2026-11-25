<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Ips\Pools\ByPoolName;

final class Ips extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/ips/pools/{pool_name}/ips [operationId: AddIpToIpPool] */
    /**
     * Add an IP address to a pool
     *
     * **This endpoint allows you to add an IP address to an IP pool.**
     *
     * You can add the same IP address to multiple pools. It may take up to 60 seconds for your IP address to be added to a pool after your request is made.
     *
     * Before you can add an IP to a pool, you need to activate it in your SendGrid account:
     *
     * 1. Log into your SendGrid account.
     * 1. Navigate to **Settings** and then select **IP Addresses**.
     * 1. Find the IP address you want to activate and then click **Edit**.
     * 1. Check **Allow my account to send mail using this IP address**.
     * 1. Click **Save**.
     *
     * You can retrieve all of your available IP addresses from the "Retrieve all IP addresses" endpoint.
     */
    public static function post(string $pool_name, ?\SendGridSDK\Requests\V3\Ips\Pools\ByPoolName\Ips\Post $payload = null): \SendGridSDK\Responses\V3\Ips\Pools\ByPoolName\Ips\Post
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Ips\Pools\ByPoolName\Ips::class)->post($pool_name);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Ips\Pools\ByPoolName\Ips::class)->post($pool_name, $payload);
    }

    /** DELETE /v3/ips/pools/{pool_name}/ips/{ip} [operationId: DeleteIpFromIpPool] */
    /**
     * Remove an IP address from a pool
     *
     * **This endpoint allows you to remove an IP address from an IP pool.**
     */
    public static function deleteByIp(\SendGridSDK\PathParams\V3\Ips\Pools\ByPoolName\Ips\ByIp $identifier): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Ips\Pools\ByPoolName\Ips::class)->deleteByIp($identifier);
    }
}
