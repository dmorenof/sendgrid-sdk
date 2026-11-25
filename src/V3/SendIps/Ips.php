<?php

declare(strict_types=1);

namespace SendGridSDK\V3\SendIps;

final class Ips extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/send_ips/ips [operationId: ListIp] */
    /**
     * Get a List of all IP Addresses on your Account
     *
     * This operation returns a list of all IP addresses associated with your account. A sample of IP details is returned with each IP, including which Pools the IP is associated with, whether the IP is set to warm up automatically, and when the IP was last updated.
     *
     * ### Limitations
     *
     * The `is_parent_assigned` parameter and `pool` parameter cannot be used at the same time. By definition, an IP cannot be assigned to a Pool if it is not first enabled. You can use either the `before_key` or `after_key` in combination with the `limit` parameter to iterate through paginated results but not both.
     */
    public static function get(?\SendGridSDK\GetParams\V3\SendIps\Ips $params = null): \SendGridSDK\Responses\V3\SendIps\Ips\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Ips::class)->get($params);
    }

    /** POST /v3/send_ips/ips [operationId: AddIp] */
    /**
     * Add a Twilio SendGrid IP Address
     *
     * This operation adds a Twilio SendGrid IP address to your account. You can also assign up to 100 Subusers to the IP address at creation.
     */
    public static function post(?\SendGridSDK\Requests\V3\SendIps\Ips\Post $payload = null): \SendGridSDK\Responses\V3\SendIps\Ips\Post
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Ips::class)->post();
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Ips::class)->post($payload);
    }

    /** GET /v3/send_ips/ips/{ip} [operationId: GetIp] */
    /**
     * Get Details for an IP Address
     *
     * This operation returns details for a specified IP address. Details include whether the IP is assigned to a parent account, set to warm up automatically, which Pools the IP is associated with, when the IP was added and modified, whether the IP is leased, and whether the IP is enabled. Note that this operation will not return Subuser information associated with the IP. To retrieve Subuser information, use the "Get a List of Subusers Assigned to an IP" endpoint.
     */
    public static function getByIp(string $ip, ?\SendGridSDK\GetParams\V3\SendIps\Ips\ByIp $params = null): \SendGridSDK\Responses\V3\SendIps\Ips\ByIp\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Ips::class)->getByIp($ip, $params);
    }

    /** PATCH /v3/send_ips/ips/{ip} [operationId: UpdateIp] */
    /**
     * Update Details for an IP Address
     *
     * This operation updates an IP address's settings, including whether the IP is set to warm up automatically, if the IP is  assigned by a parent account, and whether the IP is enabled or disabled. The request body must include at least one of the `is_auto_warmup`, `is_parent_assigned`, or `is_enabled` fields.
     */
    public static function patchByIp(string $ip, ?\SendGridSDK\Requests\V3\SendIps\Ips\ByIp\Patch $payload = null): \SendGridSDK\Responses\V3\SendIps\Ips\ByIp\Patch
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Ips::class)->patchByIp($ip);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Ips::class)->patchByIp($ip, $payload);
    }
}
