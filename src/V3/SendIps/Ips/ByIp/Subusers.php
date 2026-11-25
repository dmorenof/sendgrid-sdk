<?php

declare(strict_types=1);

namespace SendGridSDK\V3\SendIps\Ips\ByIp;

final class Subusers extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/send_ips/ips/{ip}/subusers [operationId: ListSubUserAssignedToIp] */
    /**
     * Get a List of Subusers Assigned to an IP
     *
     * This operation returns a list of Subuser IDs that have been assigned the specified IP address. To retrieve more information about the returned Subusers, use the [Subusers API](https://docs.sendgrid.com/api-reference/subusers-api/list-all-subusers).
     *
     * You can use the `after_key` and `limit` query parameters to iterate through paginated results. The maximum limit is 100, meaning you may retrieve up to 100 Subusers per request. If the `after_key` in the API response is not null, there are more Subusers assigned to the IP address than those returned in the request. You can repeat the request with the non-null `after_key` value and the same limit to retrieve the next group of Subusers.
     */
    public static function get(string $ip, ?\SendGridSDK\GetParams\V3\SendIps\Ips\ByIp\Subusers $params = null): \SendGridSDK\Responses\V3\SendIps\Ips\ByIp\Subusers\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Ips\ByIp\Subusers::class)->get($ip, $params);
    }
}
