<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Teammates\Pending\ByToken;

final class Resend extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/teammates/pending/{token}/resend [operationId: ResendTeammateInvite] */
    /**
     * Resend teammate invite
     *
     * **This endpoint allows you to resend a Teammate invitation.**
     *
     * Teammate invitations will expire after 7 days. Resending an invitation will reset the expiration date.
     */
    public static function post(string $token, ?\SendGridSDK\PostParams\V3\Teammates\Pending\ByToken\Resend $params = null): \SendGridSDK\Responses\V3\Teammates\Pending\ByToken\Resend\Post
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Teammates\Pending\ByToken\Resend::class)->post($token, $params);
    }
}
