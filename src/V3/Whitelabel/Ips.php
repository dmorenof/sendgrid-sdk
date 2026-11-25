<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Whitelabel;

final class Ips extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/whitelabel/ips [operationId: ListReverseDns] */
    /**
     * Retrieve all reverse DNS records
     *
     * **This endpoint allows you to retrieve a paginated list of all the Reverse DNS records created by this account.**
     *
     * You may include a search key by using the `ip` query string parameter. This enables you to perform a prefix search for a given IP segment (e.g., `?ip="192."`).
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Whitelabel\Ips $params = null): \SendGridSDK\Collections\V3\Whitelabel\Ips\Get\WhitelabelIpsCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Ips::class)->get($params);
    }

    /** POST /v3/whitelabel/ips [operationId: SetUpReverseDns] */
    /**
     * Set up reverse DNS
     *
     * **This endpoint allows you to set up reverse DNS.**
     */
    public static function post(?\SendGridSDK\PostParams\V3\Whitelabel\Ips $params = null): \SendGridSDK\DTOs\ReverseDns
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Ips::class)->post($params);
    }

    /** DELETE /v3/whitelabel/ips/{id} [operationId: DeleteReverseDns] */
    /**
     * Delete a reverse DNS record
     *
     * **This endpoint allows you to delete a reverse DNS record.**
     *
     * A call to this endpoint will respond with a 204 status code if the deletion was successful.
     *
     * You can retrieve the IDs associated with all your reverse DNS records using the "Retrieve all reverse DNS records" endpoint.
     */
    public static function deleteById(string $id, ?\SendGridSDK\DeleteParams\V3\Whitelabel\Ips\ById $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Ips::class)->deleteById($id, $params);
    }

    /** GET /v3/whitelabel/ips/{id} [operationId: GetReverseDns] */
    /**
     * Retrieve a reverse DNS record
     *
     * **This endpoint allows you to retrieve a reverse DNS record.**
     *
     * You can retrieve the IDs associated with all your reverse DNS records using the "Retrieve all reverse DNS records" endpoint.
     */
    public static function getById(string $id, ?\SendGridSDK\GetParams\V3\Whitelabel\Ips\ById $params = null): \SendGridSDK\DTOs\ReverseDns
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Ips::class)->getById($id, $params);
    }
}
