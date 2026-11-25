<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing;

final class Senders extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/marketing/senders [operationId: ListSenderMcSenders] */
    /**
     * Get a list of all Senders
     *
     * **This endpoint allows you to get a list of all your Senders.**
     */
    public static function get(?\SendGridSDK\GetParams\V3\Marketing\Senders $params = null): \SendGridSDK\Responses\V3\Marketing\Senders\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Senders::class)->get($params);
    }

    /** POST /v3/marketing/senders [operationId: CreateSenderMcSenders] */
    /**
     * Create a Sender
     *
     * **This endpoint allows you to create a new Sender.**
     *
     * *You may create up to 100 unique Senders.*
     *
     * Senders are required to be verified before use. If your domain has been authenticated, a new Sender will auto verify on creation. Otherwise an email will be sent to the `from.email`.
     */
    public static function post(?\SendGridSDK\PostParams\V3\Marketing\Senders $params = null): \SendGridSDK\DTOs\Sender
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Senders::class)->post($params);
    }

    /** DELETE /v3/marketing/senders/{id} [operationId: DeleteSenderMcSenders] */
    /**
     * Delete a Sender
     *
     * **This endpoint allows you to delete an existing Sender.**
     */
    public static function deleteById(int $id, ?\SendGridSDK\DeleteParams\V3\Marketing\Senders\ById $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Senders::class)->deleteById($id, $params);
    }

    /** GET /v3/marketing/senders/{id} [operationId: GetSenderMcSenders] */
    /**
     * Get a specific Sender
     *
     * **This endpoint allows you to get the details for a specific Sender by `id`.**
     */
    public static function getById(int $id, ?\SendGridSDK\GetParams\V3\Marketing\Senders\ById $params = null): \SendGridSDK\DTOs\Sender
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Senders::class)->getById($id, $params);
    }

    /** PATCH /v3/marketing/senders/{id} [operationId: UpdateSenderMcSenders] */
    /**
     * Update a Sender
     *
     * **This endpoint allows you to update an existing Sender.**
     *
     * Updates to `from.email` require re-verification. If your domain has been authenticated, a new Sender will auto verify on creation. Otherwise, an email will be sent to the `from.email`.
     *
     * Partial updates are allowed, but fields that are marked as "required" in the `POST` (create) endpoint must not be nil if that field is included in the `PATCH` request.
     */
    public static function patchById(int $id, ?\SendGridSDK\PatchParams\V3\Marketing\Senders\ById $params = null): \SendGridSDK\DTOs\Sender
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Senders::class)->patchById($id, $params);
    }
}
