<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Partners\Accounts\ByAccountID;

final class Sso extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/partners/accounts/{accountID}/sso [operationId: AuthenticateAccount] */
    /**
     * Authenticate an account with single sign on
     *
     * Authenticates and logs in a user to Twilio Sendgrid as a specific admin identity configured for SSO by partner. Any additional teammates or subusers will need to log in directly via app.sendgrid.com
     */
    public static function post(string $accountID): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Partners\Accounts\ByAccountID\Sso::class)->post($accountID);
    }
}
