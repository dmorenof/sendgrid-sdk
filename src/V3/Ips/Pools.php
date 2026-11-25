<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Ips;

final class Pools extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/ips/pools [operationId: ListIpPoolIps] */
    /**
     * Retrieve all IP pools
     *
     * **This endpoint allows you to get all of your IP pools.**
     */
    public static function get(): \SendGridSDK\Collections\V3\Ips\Pools\Get\IpsPoolsCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Ips\Pools::class)->get();
    }

    /** POST /v3/ips/pools [operationId: CreateIpPoolIps] */
    /**
     * Create an IP pool
     *
     * **This endpoint allows you to create an IP pool.**
     *
     * Before you can create an IP pool, you need to activate the IP in your SendGrid account:
     *
     * 1. Log into your SendGrid account.
     * 1. Navigate to **Settings** and then select **IP Addresses**.
     * 1. Find the IP address you want to activate and then click **Edit**.
     * 1. Check **Allow my account to send mail using this IP address**.
     * 1. Click **Save**.
     */
    public static function post(?\SendGridSDK\Requests\V3\Ips\Pools\Post $payload = null): \SendGridSDK\DTOs\Ip\Pools200
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Ips\Pools::class)->post();
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Ips\Pools::class)->post($payload);
    }

    /** DELETE /v3/ips/pools/{pool_name} [operationId: DeleteIpPoolIps] */
    /**
     * Delete an IP pool
     *
     * **This endpoint allows you to delete an IP pool.**
     */
    public static function deleteByPoolName(string $pool_name): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Ips\Pools::class)->deleteByPoolName($pool_name);
    }

    /** GET /v3/ips/pools/{pool_name} [operationId: GetIpPoolIps] */
    /**
     * Retrieve all the IPs in a specified pool
     *
     * **This endpoint allows you to get all of the IP addresses that are in a specific IP pool.**
     */
    public static function getByPoolName(string $pool_name): \SendGridSDK\Responses\V3\Ips\Pools\ByPoolName\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Ips\Pools::class)->getByPoolName($pool_name);
    }

    /** PUT /v3/ips/pools/{pool_name} [operationId: UpdateIpPoolIps] */
    /**
     * Rename an IP pool
     *
     * **This endpoint allows you to update the name of an IP pool.**
     */
    public static function putByPoolName(string $pool_name, ?\SendGridSDK\Requests\V3\Ips\Pools\ByPoolName\Put $payload = null): \SendGridSDK\DTOs\Ip\Pools200
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Ips\Pools::class)->putByPoolName($pool_name);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Ips\Pools::class)->putByPoolName($pool_name, $payload);
    }
}
