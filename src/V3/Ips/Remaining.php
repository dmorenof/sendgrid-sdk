<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Ips;

final class Remaining extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/ips/remaining [operationId: ListRemainingIpCount] */
    /**
     * Get remaining IPs count
     *
     * **This endpoint gets amount of IP Addresses that can still be created during a given period and the price of those IPs.**
     */
    public static function get(): \SendGridSDK\Responses\V3\Ips\Remaining\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Ips\Remaining::class)->get();
    }
}
