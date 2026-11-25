<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Subusers\BySubuserName;

final class Ips extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** PUT /v3/subusers/{subuser_name}/ips [operationId: UpdateSubuserIp] */
    /**
     * Update IPs assigned to a subuser
     *
     * **This endpoint allows you update your subusers' assigned IP.**
     *
     * Each subuser should be assigned to an IP address from which all of this subuser's mail will be sent. Often, this is the same IP as the parent account, but each subuser can have one or more of their own IP addresses as well.
     *
     * More information:
     *
     * * [How to request more IPs](https://sendgrid.com/docs/ui/account-and-settings/dedicated-ip-addresses/)
     * * [Setup Reverse DNS](https://sendgrid.com/docs/ui/account-and-settings/how-to-set-up-reverse-dns/)
     */
    public static function put(string $subuser_name, ?\SendGridSDK\Collections\StringCollection $payload = null): \SendGridSDK\Responses\V3\Subusers\BySubuserName\Ips\Put
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Subusers\BySubuserName\Ips::class)->put($subuser_name);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Subusers\BySubuserName\Ips::class)->put($subuser_name, $payload);
    }
}
