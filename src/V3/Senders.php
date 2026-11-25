<?php

declare(strict_types=1);

namespace SendGridSDK\V3;

final class Senders extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/senders [operationId: ListSender] */
    /**
     * Get all Sender Identities
     *
     * **This endpoint allows you to retrieve a list of all sender identities that have been created for your account.**
     */
    public static function get(?\SendGridSDK\GetParams\V3\Senders $params = null): \SendGridSDK\Responses\V3\Senders\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Senders::class)->get($params);
    }

    /** POST /v3/senders [operationId: CreateSender] */
    /**
     * Create a Sender Identity
     *
     * **This endpoint allows you to create a new sender identity.**
     *
     * You may create up to 100 unique sender identities.
     */
    public static function post(?\SendGridSDK\PostParams\V3\Senders $params = null): \SendGridSDK\DTOs\Sender\Id
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Senders::class)->post($params);
    }

    /** DELETE /v3/senders/{sender_id} [operationId: DeleteSender] */
    /**
     * Delete a Sender Identity
     *
     * **This endpoint allows you to delete one of your sender identities.**
     */
    public static function deleteBySenderId(int $sender_id, ?\SendGridSDK\DeleteParams\V3\Senders\BySenderId $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Senders::class)->deleteBySenderId($sender_id, $params);
    }

    /** GET /v3/senders/{sender_id} [operationId: GetSender] */
    /**
     * View a Sender Identity
     *
     * **This endpoint allows you to retrieve a specific sender identity.**
     */
    public static function getBySenderId(int $sender_id, ?\SendGridSDK\GetParams\V3\Senders\BySenderId $params = null): \SendGridSDK\DTOs\Sender\Id
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Senders::class)->getBySenderId($sender_id, $params);
    }

    /** PATCH /v3/senders/{sender_id} [operationId: UpdateSender] */
    /**
     * Update a Sender Identity
     *
     * **This endpoint allows you to update a sender identity.**
     *
     * Updates to `from.email` require re-verification.
     *
     * Partial updates are allowed, but fields that are marked as "required" in the POST (create) endpoint must not be nil if that field is included in the PATCH request.
     */
    public static function patchBySenderId(int $sender_id, ?\SendGridSDK\PatchParams\V3\Senders\BySenderId $params = null): \SendGridSDK\DTOs\Sender\Id
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Senders::class)->patchBySenderId($sender_id, $params);
    }
}
