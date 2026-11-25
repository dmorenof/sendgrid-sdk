<?php

declare(strict_types=1);

namespace SendGridSDK\V3\SendIps;

final class Pools extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/send_ips/pools [operationId: ListIpPool] */
    /**
     * GET all IP Pools that have Associated IPs
     *
     * This operation returns a list of your IP Pools and a sample of each Pools' associated IP addresses.
     *
     * A maximum of 10 IPs will be returned per IP Pool by default. To retrieve additional IP addresses associated with a Pool, use the "Get IPs Assigned to an IP Pool" operation. Each user may have a maximum of 100 IP Pools.
     */
    public static function get(?\SendGridSDK\GetParams\V3\SendIps\Pools $params = null): \SendGridSDK\Responses\V3\SendIps\Pools\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Pools::class)->get($params);
    }

    /** POST /v3/send_ips/pools [operationId: CreateIpPool] */
    /**
     * Create an IP Pool with a Name and IP Assignments
     *
     * This operation will create a named IP Pool and associate specified IP addresses with the newly created Pool. This operation requires all IP assignments to succeed. If any IP assignments fail, this endpoint will return an error and the Pool will not be created.
     *
     * Each IP Pool may have a maximum of 100 assigned IP addresses.
     */
    public static function post(?\SendGridSDK\Requests\V3\SendIps\Pools\Post $payload = null): \SendGridSDK\Responses\V3\SendIps\Pools\Post
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Pools::class)->post();
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Pools::class)->post($payload);
    }

    /** DELETE /v3/send_ips/pools/{poolid} [operationId: DeleteIpPool] */
    /**
     * Delete IP Pool
     *
     * This operation deletes an IP Pool and unassigns all IP addresses associated with the Pool. IP addresses associated with the deleted Pool will remain in your account.
     */
    public static function deleteByPoolid(string $poolid): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Pools::class)->deleteByPoolid($poolid);
    }

    /** GET /v3/send_ips/pools/{poolid} [operationId: GetIpPool] */
    /**
     * Get Details for an IP Pool
     *
     * This operation will return the details for a specified IP Pool, including the Pool's name, ID, a sample list of the IPs associated with the Pool, and the total number of IPs belonging to the Pool.
     *
     * A maximum of 10 IPs will be returned per IP Pool by default. To retrieve additional IP addresses associated with a Pool, use the "Get IPs Assigned to an IP Pool" operation.
     */
    public static function getByPoolid(string $poolid, ?\SendGridSDK\GetParams\V3\SendIps\Pools\ByPoolid $params = null): \SendGridSDK\Responses\V3\SendIps\Pools\ByPoolid\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Pools::class)->getByPoolid($poolid, $params);
    }

    /** PUT /v3/send_ips/pools/{poolid} [operationId: UpdateIpPool] */
    /**
     * Update an IP Pool Name
     *
     * This operation will rename an IP Pool. An IP Pool name cannot start with a dot/period (.) or space.
     */
    public static function putByPoolid(string $poolid, ?\SendGridSDK\Requests\V3\SendIps\Pools\ByPoolid\Put $payload = null): \SendGridSDK\Responses\V3\SendIps\Pools\ByPoolid\Put
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Pools::class)->putByPoolid($poolid);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Pools::class)->putByPoolid($poolid, $payload);
    }
}
