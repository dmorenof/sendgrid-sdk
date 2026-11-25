<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Subusers\BySubuserName;

final class WebsiteAccess extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** PATCH /v3/subusers/{subuser_name}/website_access [operationId: UpdateSubuserWebsiteAccess] */
    /**
     * Enable/Disable website access for a Subuser
     *
     * Enable/Disable website access for a Subuser, while still preserving email send functionality.
     */
    public static function patch(string $subuser_name, ?\SendGridSDK\Requests\V3\Subusers\BySubuserName\WebsiteAccess\Patch $payload = null): void
    {
        if (func_num_args() <= 1) {
            self::client()->resource(\SendGridSDK\Resources\V3\Subusers\BySubuserName\WebsiteAccess::class)->patch($subuser_name);
            return;
        }
        self::client()->resource(\SendGridSDK\Resources\V3\Subusers\BySubuserName\WebsiteAccess::class)->patch($subuser_name, $payload);
    }
}
