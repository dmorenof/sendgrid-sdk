<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Partners\Accounts\ByAccountID;

final class Offerings extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/partners/accounts/{accountID}/offerings [operationId: ListAccountOffering] */
    /**
     * Get account offerings
     *
     * Retrieves offering information about the specified account.
     */
    public static function get(string $accountID): \SendGridSDK\DTOs\AccountProvisioning\AssignedOfferingList
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Partners\Accounts\ByAccountID\Offerings::class)->get($accountID);
    }

    /** PUT /v3/partners/accounts/{accountID}/offerings [operationId: UpdateAccountOffering] */
    /**
     * Update account offerings
     *
     * Changes a package offering for the specified account. Please note that an account can have only one package offering. Also associates one or more add-on offerings such as Marketing Campaigns, Dedicated IP Addresses, and Expert Services to the specified account.
     */
    public static function put(string $accountID, \SendGridSDK\Requests\V3\Partners\Accounts\ByAccountID\Offerings\Put $payload): \SendGridSDK\DTOs\AccountProvisioning\OfferingList
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Partners\Accounts\ByAccountID\Offerings::class)->put($accountID, $payload);
    }
}
