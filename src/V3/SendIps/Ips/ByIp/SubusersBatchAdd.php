<?php

declare(strict_types=1);

namespace SendGridSDK\V3\SendIps\Ips\ByIp;

final class SubusersBatchAdd extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/send_ips/ips/{ip}/subusers:batchAdd [operationId: AddSubUsersToIp] */
    /**
     * Assign a Batch of Subusers to an IP
     *
     * This operation appends a batch of Subusers to a specified IP address. This endpoint requires all Subuser assignments to succeed. If a Subuser assignment fails, this endpoint will return an error.
     */
    public static function post(string $ip, ?\SendGridSDK\Requests\V3\SendIps\Ips\ByIp\SubusersBatchAdd\Post $payload = null): \SendGridSDK\Responses\V3\SendIps\Ips\ByIp\SubusersBatchAdd\Post
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Ips\ByIp\SubusersBatchAdd::class)->post($ip);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Ips\ByIp\SubusersBatchAdd::class)->post($ip, $payload);
    }
}
