<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Whitelabel;

final class Links extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/whitelabel/links [operationId: ListBrandedLink] */
    /**
     * Retrieve all branded links
     *
     * **This endpoint allows you to retrieve all branded links**.
     *
     * You can submit this request as one of your subusers if you include their ID in the `on-behalf-of` header in the request.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Whitelabel\Links $params = null): \SendGridSDK\Collections\V3\Whitelabel\Links\Get\WhitelabelLinksCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Links::class)->get($params);
    }

    /** POST /v3/whitelabel/links [operationId: CreateBrandedLink] */
    /**
     * Create a branded link
     *
     * **This endpoint allows you to create a new branded link.**
     *
     * To create the link branding, supply the root domain and, optionally, the subdomain — these go into separate fields in your request body. The root domain should match your FROM email address. If you provide a  subdomain, it must be different from the subdomain you used for authenticating your domain.
     *
     * You can submit this request as one of your subusers if you include their ID in the `on-behalf-of` header in the request.
     */
    public static function post(?\SendGridSDK\PostParams\V3\Whitelabel\Links $params = null): \SendGridSDK\DTOs\Link\Branding200
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Links::class)->post($params);
    }

    /** DELETE /v3/whitelabel/links/{id} [operationId: DeleteBrandedLink] */
    /**
     * Delete a branded link
     *
     * **This endpoint allows you to delete a branded link.**
     *
     * Your request will receive a response with a 204 status code if the deletion was successful. The call does not return the link's details, so if you wish to record these make sure you call the  "Retrieve a branded link" endpoint *before* you request its deletion.
     *
     * You can submit this request as one of your subusers if you include their ID in the `on-behalf-of` header in the request.
     */
    public static function deleteById(int $id, ?\SendGridSDK\DeleteParams\V3\Whitelabel\Links\ById $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Links::class)->deleteById($id, $params);
    }

    /** GET /v3/whitelabel/links/{id} [operationId: GetBrandedLink] */
    /**
     * Retrieve a branded link
     *
     * **This endpoint allows you to retrieve a specific branded link by providing its ID.**
     *
     * You can submit this request as one of your subusers if you include their ID in the `on-behalf-of` header in the request.
     */
    public static function getById(int $id, ?\SendGridSDK\GetParams\V3\Whitelabel\Links\ById $params = null): \SendGridSDK\DTOs\Link\Branding200
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Links::class)->getById($id, $params);
    }

    /** PATCH /v3/whitelabel/links/{id} [operationId: UpdateBrandedLink] */
    /**
     * Update a branded link
     *
     * **This endpoint allows you to update a specific branded link. You can use this endpoint to change a branded link's default status.**
     *
     * You can submit this request as one of your subusers if you include their ID in the `on-behalf-of` header in the request.
     */
    public static function patchById(int $id, ?\SendGridSDK\PatchParams\V3\Whitelabel\Links\ById $params = null): \SendGridSDK\DTOs\Link\Branding200
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Links::class)->patchById($id, $params);
    }
}
