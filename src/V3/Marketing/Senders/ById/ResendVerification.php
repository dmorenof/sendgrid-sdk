<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing\Senders\ById;

final class ResendVerification extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/marketing/senders/{id}/resend_verification [operationId: ResetSenderVerificationMcSenders] */
    /**
     * Resend a Sender verification
     *
     * **This endpoint allows you to resend the verification request for a specific Sender.**
     */
    public static function post(int $id, ?\SendGridSDK\PostParams\V3\Marketing\Senders\ById\ResendVerification $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Senders\ById\ResendVerification::class)->post($id, $params);
    }
}
