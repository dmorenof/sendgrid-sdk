<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Senders\BySenderId;

final class ResendVerification extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/senders/{sender_id}/resend_verification [operationId: ResetSenderVerification] */
    /**
     * Resend Sender Identity Verification
     *
     * **This endpoint allows you to resend a sender identity verification email.**
     */
    public static function post(int $sender_id, ?\SendGridSDK\PostParams\V3\Senders\BySenderId\ResendVerification $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Senders\BySenderId\ResendVerification::class)->post($sender_id, $params);
    }
}
