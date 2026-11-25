<?php

declare(strict_types=1);

namespace SendGridSDK\V3\SendIps\Ips\ByIp;

final class SubusersBatchDelete extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/send_ips/ips/{ip}/subusers:batchDelete [operationId: DeleteSubUsersFromIp] */
    /**
     * Delete a Batch of Subusers from an IP
     *
     * This operation removes a batch of Subusers from a specified IP address.
     */
    public static function post(string $ip, ?\SendGridSDK\Requests\V3\SendIps\Ips\ByIp\SubusersBatchDelete\Post $payload = null): void
    {
        if (func_num_args() <= 1) {
            self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Ips\ByIp\SubusersBatchDelete::class)->post($ip);
            return;
        }
        self::client()->resource(\SendGridSDK\Resources\V3\SendIps\Ips\ByIp\SubusersBatchDelete::class)->post($ip, $payload);
    }
}
