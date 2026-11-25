<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing;

final class Lists extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/marketing/lists [operationId: ListMarketingList] */
    /**
     * Get All Lists
     *
     * **This endpoint returns an array of all of your contact lists.**
     */
    public static function get(?\SendGridSDK\GetParams\V3\Marketing\Lists $params = null): \SendGridSDK\Responses\V3\Marketing\Lists\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Lists::class)->get($params);
    }

    /** POST /v3/marketing/lists [operationId: CreateMarketingList] */
    /**
     * Create List
     *
     * **This endpoint creates a new contacts list.**
     *
     * Once you create a list, you can use the UI to [trigger an automation](https://sendgrid.com/docs/ui/sending-email/getting-started-with-automation/#create-an-automation) every time you add a new contact to the list.
     *
     * A link to the newly created object is in `_metadata`.
     */
    public static function post(?\SendGridSDK\Requests\V3\Marketing\Lists\Post $payload = null): \SendGridSDK\DTOs\ListDTO
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Lists::class)->post();
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Lists::class)->post($payload);
    }

    /** DELETE /v3/marketing/lists/{id} [operationId: DeleteMarketingList] */
    /**
     * Delete a list
     *
     * **This endpoint allows you to deletes a specific list.**
     *
     * Optionally, you can also delete contacts associated to the list. The query parameter, `delete_contacts=true`, will delete the list and start an asynchronous job to delete associated contacts.
     */
    public static function deleteById(string $id, ?\SendGridSDK\DeleteParams\V3\Marketing\Lists\ById $params = null): ?\SendGridSDK\Responses\V3\Marketing\Lists\ById\Delete
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Lists::class)->deleteById($id, $params);
    }

    /** GET /v3/marketing/lists/{id} [operationId: GetMarketingList] */
    /**
     * Get a List by ID
     *
     * **This endpoint returns data about a specific list.**
     * Setting the optional parameter `contact_sample=true` returns the `contact_sample` in the response body. Up to 50 of the most recent contacts uploaded or attached to a list will be returned.
     * The full contact count is also returned.
     */
    public static function getById(string $id, ?\SendGridSDK\GetParams\V3\Marketing\Lists\ById $params = null): \SendGridSDK\Responses\V3\Marketing\Lists\ById\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Lists::class)->getById($id, $params);
    }

    /** PATCH /v3/marketing/lists/{id} [operationId: UpdateMarketingList] */
    /**
     * Update List
     *
     * **This endpoint updates the name of a list.**
     */
    public static function patchById(string $id, ?\SendGridSDK\Requests\V3\Marketing\Lists\ById\Patch $payload = null): \SendGridSDK\DTOs\ListDTO
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Lists::class)->patchById($id);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Lists::class)->patchById($id, $payload);
    }
}
