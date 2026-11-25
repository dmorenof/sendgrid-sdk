<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Partners\Accounts\ByAccountID;

final class State extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/partners/accounts/{accountID}/state [operationId: GetAccountState] */
    /**
     * Get an account's state
     *
     * Retrieve the state of the specified account.
     */
    public static function get(string $accountID): \SendGridSDK\DTOs\AccountProvisioning\StateRead
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Partners\Accounts\ByAccountID\State::class)->get($accountID);
    }

    /** PUT /v3/partners/accounts/{accountID}/state [operationId: UpdateAccountState] */
    /**
     * Update an account's state
     *
     * Update the state of the specified account.
     */
    public static function put(string $accountID, \SendGridSDK\DTOs\AccountProvisioning\StateWrite $payload): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Partners\Accounts\ByAccountID\State::class)->put($accountID, $payload);
    }
}
