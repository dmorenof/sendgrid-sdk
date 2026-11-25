<?php

declare(strict_types=1);

namespace SendGridSDK\V3;

final class Ips extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/ips [operationId: ListIpIps] */
    /**
     * Retrieve all IP addresses
     *
     * **This endpoint allows you to retrieve a paginated list of all assigned and unassigned IPs.**
     *
     * Response includes warm up status, pools, assigned subusers, and reverse DNS info. The start_date field corresponds to when warmup started for that IP.
     *
     * A single IP address or a range of IP addresses may be dedicated to an account in order to send email for multiple domains. The reputation of this IP is determined by the aggregate performance of all email traffic sent from it.
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Ips $params = null): \SendGridSDK\Collections\V3\Ips\Get\IpsCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Ips::class)->get($params);
    }

    /** POST /v3/ips [operationId: AddIpIps] */
    /**
     * Add IPs
     *
     * **This endpoint is for adding a(n) IP Address(es) to your account.**
     */
    public static function post(?\SendGridSDK\Requests\V3\Ips\Post $payload = null): \SendGridSDK\Responses\V3\Ips\Post
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Ips::class)->post();
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Ips::class)->post($payload);
    }

    /** GET /v3/ips/{ip_address} [operationId: GetIpIps] */
    /**
     * Retrieve all IP pools an IP address belongs to
     *
     * **This endpoint allows you to see which IP pools a particular IP address has been added to.**
     *
     * The same IP address can be added to multiple IP pools.
     *
     * A single IP address or a range of IP addresses may be dedicated to an account in order to send email for multiple domains. The reputation of this IP is based on the aggregate performance of all the senders who use it.
     */
    public static function getByIpAddress(string $ip_address): \SendGridSDK\Responses\V3\Ips\ByIpAddress\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Ips::class)->getByIpAddress($ip_address);
    }
}
