<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Teammates\ByTeammateName;

final class SubuserAccess extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/teammates/{teammate_name}/subuser_access [operationId: ListSubuserByTemplate] */
    /**
     * Get Teammate Subuser Access
     *
     * **This operation allows you to retrieve the Subusers that can be accessed by a specified Teammate.**
     *
     * This operation will return the Subusers available to a Teammate, including the scopes available. If the Teammate is an administrator, all Subusers will be returned.
     */
    public static function get(string $teammate_name, ?\SendGridSDK\GetParams\V3\Teammates\ByTeammateName\SubuserAccess $params = null): \SendGridSDK\Responses\V3\Teammates\ByTeammateName\SubuserAccess\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Teammates\ByTeammateName\SubuserAccess::class)->get($teammate_name, $params);
    }
}
