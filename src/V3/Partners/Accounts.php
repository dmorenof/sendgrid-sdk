<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Partners;

final class Accounts extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/partners/accounts [operationId: ListAccount] */
    /**
     * Get all accounts
     *
     * Retrieves all accounts under the organization.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Partners\Accounts $params = null): \SendGridSDK\Responses\V3\Partners\Accounts\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Partners\Accounts::class)->get($params);
    }

    /** POST /v3/partners/accounts [operationId: CreateAccount] */
    /**
     * Create an account
     *
     * Creates a new account, with specified offering, under the organization.
     */
    public static function post(\SendGridSDK\PostParams\V3\Partners\Accounts $params): \SendGridSDK\DTOs\AccountProvisioning\AccountId
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Partners\Accounts::class)->post($params);
    }

    /** DELETE /v3/partners/accounts/{accountID} [operationId: DeleteAccount] */
    /**
     * Delete an account
     *
     * Delete a specific account under your organization by account ID. Note that this is an **irreversible** action that does the following:
     *
     *  - Revokes API Keys and SSO so that the account user cannot log in or access SendGrid data.
     *  - Removes all offerings and configured SendGrid resources such as dedicated IPs.
     *  - Cancels billing effective immediately.
     */
    public static function deleteByAccountID(string $accountID): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Partners\Accounts::class)->deleteByAccountID($accountID);
    }
}
