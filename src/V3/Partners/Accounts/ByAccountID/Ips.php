<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Partners\Accounts\ByAccountID;

final class Ips extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** DELETE /v3/partners/accounts/{accountID}/ips [operationId: RemoveAccountIps] */
    /**
     * Remove Account IPs
     *
     * Removes IP(s) from the specified account.
     */
    public static function delete(string $accountID, \SendGridSDK\Requests\V3\Partners\Accounts\ByAccountID\Ips\Delete $payload): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Partners\Accounts\ByAccountID\Ips::class)->delete($accountID, $payload);
    }

    /** GET /v3/partners/accounts/{accountID}/ips [operationId: ListAccountIps] */
    /**
     * List Account IPs
     *
     * Retrieves a paginated list of IPs associated with the specified account, ordered by most recently added IP.
     */
    public static function get(string $accountID, ?\SendGridSDK\GetParams\V3\Partners\Accounts\ByAccountID\Ips $params = null): \SendGridSDK\Responses\V3\Partners\Accounts\ByAccountID\Ips\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Partners\Accounts\ByAccountID\Ips::class)->get($accountID, $params);
    }

    /** POST /v3/partners/accounts/{accountID}/ips [operationId: AddAccountIps] */
    /**
     * Add Account IPs
     *
     * Adds IP(s) to the specified account.
     */
    public static function post(string $accountID, \SendGridSDK\Requests\V3\Partners\Accounts\ByAccountID\Ips\Post $payload): \SendGridSDK\Responses\V3\Partners\Accounts\ByAccountID\Ips\Post
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Partners\Accounts\ByAccountID\Ips::class)->post($accountID, $payload);
    }
}
