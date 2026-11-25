<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Ips;

final class Assigned extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/ips/assigned [operationId: ListAssignedIp] */
    /**
     * Retrieve all assigned IPs
     *
     * **This endpoint allows you to retrieve only assigned IP addresses.**
     *
     * A single IP address or a range of IP addresses may be dedicated to an account in order to send email for multiple domains. The reputation of this IP is based on the aggregate performance of all the senders who use it.
     */
    public static function get(): \SendGridSDK\Collections\V3\Ips\Assigned\Get\IpsAssignedCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Ips\Assigned::class)->get();
    }
}
