<?php

declare(strict_types=1);

namespace SendGridSDK\V3\VerifiedSenders;

final class Resend extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/verified_senders/resend/{id} [operationId: ResendVerifiedSender] */
    /**
     * Resend Verified Sender Request
     *
     * **This endpoint allows you to resend a verification email to a specified Sender Identity**.
     *
     * Passing the `id` assigned to a Sender Identity to this endpoint will resend a verification email to the `from_address` associated with the Sender Identity. This can be useful if someone loses their verification email or needs to have it resent for any other reason.
     *
     * You can retrieve the IDs associated with Sender Identities by passing a "Get All Verified Senders" endpoint.
     */
    public static function postById(string $id): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\VerifiedSenders\Resend::class)->postById($id);
    }
}
