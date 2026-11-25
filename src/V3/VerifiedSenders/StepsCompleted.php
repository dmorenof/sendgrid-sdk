<?php

declare(strict_types=1);

namespace SendGridSDK\V3\VerifiedSenders;

final class StepsCompleted extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/verified_senders/steps_completed [operationId: ListVerifiedSenderStepsCompleted] */
    /**
     * Completed Steps
     *
     * **This endpoint allows you to determine which of SendGrid’s verification processes have been completed for an account**.
     *
     * This endpoint returns boolean values, `true` and `false`, for [Domain Authentication](https://sendgrid.com/docs/for-developers/sending-email/sender-identity/#domain-authentication), `domain_verified`, and [Single Sender Verification](https://sendgrid.com/docs/for-developers/sending-email/sender-identity/#single-sender-verification), `sender_verified`, for the account.
     *
     * An account may have one, both, or neither verification steps completed. If you need to authenticate a domain rather than a Single Sender, see the "Authenticate a domain" endpoint.
     */
    public static function get(): \SendGridSDK\Responses\V3\VerifiedSenders\StepsCompleted\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\VerifiedSenders\StepsCompleted::class)->get();
    }
}
