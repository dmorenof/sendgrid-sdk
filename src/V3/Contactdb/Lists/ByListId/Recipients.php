<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Contactdb\Lists\ByListId;

final class Recipients extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/contactdb/lists/{list_id}/recipients [operationId: ListRecipientsFromContactDbList] */
    /**
     * Retrieve all recipients on a List
     *
     * **This endpoint allows you to retrieve all recipients on the list with the given ID.**
     */
    public static function get(int $list_id, ?\SendGridSDK\GetParams\V3\Contactdb\Lists\ByListId\Recipients $params = null): \SendGridSDK\Responses\V3\Contactdb\Lists\ByListId\Recipients\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Lists\ByListId\Recipients::class)->get($list_id, $params);
    }

    /** POST /v3/contactdb/lists/{list_id}/recipients [operationId: AddRecipientsToContactDbList] */
    /**
     * Add Multiple Recipients to a List
     *
     * **This endpoint allows you to add multiple recipients to a list.**
     *
     * Adds existing recipients to a list, passing in the recipient IDs to add. Recipient IDs (base64-encoded email addresses) should be passed exactly as they are returned from recipient endpoints.
     */
    public static function post(int $list_id, ?\SendGridSDK\PostParams\V3\Contactdb\Lists\ByListId\Recipients $params = null): mixed
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Lists\ByListId\Recipients::class)->post($list_id, $params);
    }

    /** DELETE /v3/contactdb/lists/{list_id}/recipients/{recipient_id} [operationId: DeleteRecipientFromContactDbList] */
    /**
     * Delete a Single Recipient from a Single List
     *
     * **This endpoint allows you to delete a single recipient from a list.**
     */
    public static function deleteByRecipientId(\SendGridSDK\PathParams\V3\Contactdb\Lists\ByListId\Recipients\ByRecipientId $identifier, ?\SendGridSDK\DeleteParams\V3\Contactdb\Lists\ByListId\Recipients\ByRecipientId $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Lists\ByListId\Recipients::class)->deleteByRecipientId($identifier, $params);
    }

    /** POST /v3/contactdb/lists/{list_id}/recipients/{recipient_id} [operationId: AddRecipientToContactDbList] */
    /**
     * Add a Single Recipient to a List
     *
     * **This endpoint allows you to add a single recipient to a list.**
     */
    public static function postByRecipientId(\SendGridSDK\PathParams\V3\Contactdb\Lists\ByListId\Recipients\ByRecipientId $identifier, ?\SendGridSDK\PostParams\V3\Contactdb\Lists\ByListId\Recipients\ByRecipientId $params = null): mixed
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Lists\ByListId\Recipients::class)->postByRecipientId($identifier, $params);
    }
}
