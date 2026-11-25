<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Teammates;

final class Pending extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/teammates/pending [operationId: ListPendingTeammate] */
    /**
     * Retrieve all pending teammates
     *
     * **This endpoint allows you to retrieve a list of all pending Teammate invitations.**
     *
     * Each teammate invitation is valid for 7 days. Users may resend the invitation to refresh the expiration date.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Teammates\Pending $params = null): \SendGridSDK\Responses\V3\Teammates\Pending\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Teammates\Pending::class)->get($params);
    }

    /** DELETE /v3/teammates/pending/{token} [operationId: DeletePendingTeammate] */
    /**
     * Delete pending teammate
     *
     * **This endpoint allows you to delete a pending teammate invite.**
     */
    public static function deleteByToken(string $token, ?\SendGridSDK\DeleteParams\V3\Teammates\Pending\ByToken $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Teammates\Pending::class)->deleteByToken($token, $params);
    }
}
