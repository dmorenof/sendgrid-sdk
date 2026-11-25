<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Ips;

final class Warmup extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/ips/warmup [operationId: ListWarmUpIp] */
    /**
     * Retrieve all IPs currently in warmup
     *
     * **This endpoint allows you to retrieve all of your IP addresses that are currently warming up.**
     */
    public static function get(): \SendGridSDK\Collections\V3\Ips\Warmup\Get\IpsWarmupCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Ips\Warmup::class)->get();
    }

    /** POST /v3/ips/warmup [operationId: WarmUpIp] */
    /**
     * Start warming up an IP address
     *
     * **This endpoint allows you to put an IP address into warmup mode.**
     */
    public static function post(?\SendGridSDK\Requests\V3\Ips\Warmup\Post $payload = null): \SendGridSDK\Collections\V3\Ips\Warmup\Post\IpsWarmupCollection
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Ips\Warmup::class)->post();
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Ips\Warmup::class)->post($payload);
    }

    /** DELETE /v3/ips/warmup/{ip_address} [operationId: StopIpWarmUp] */
    /**
     * Stop warming up an IP address
     *
     * **This endpoint allows you to remove an IP address from warmup mode.**
     *
     * Your request will return a 204 status code if the specified IP was successfully removed from warmup mode. To retrieve details of the IP’s warmup status *before* removing it from warmup mode, call the  "Retrieve the warmpup status for a specific IP address" endpoint.
     */
    public static function deleteByIpAddress(string $ip_address): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Ips\Warmup::class)->deleteByIpAddress($ip_address);
    }

    /** GET /v3/ips/warmup/{ip_address} [operationId: GetWarmUpIp] */
    /**
     * Retrieve the warmup status for a specific IP address
     *
     * **This endpoint allows you to retrieve the warmup status for a specific IP address.**
     *
     * You can retrieve all of your warming IPs using the "Retrieve all IPs currently in warmup" endpoint.
     */
    public static function getByIpAddress(string $ip_address): \SendGridSDK\Collections\V3\Ips\Warmup\ByIpAddress\Get\WarmupByIpAddressCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Ips\Warmup::class)->getByIpAddress($ip_address);
    }
}
