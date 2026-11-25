<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Contactdb;

final class Recipients extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** DELETE /v3/contactdb/recipients [operationId: DeleteRecipients] */
    /**
     * Delete Recipients
     *
     * **This endpoint allows you to deletes one or more recipients.**
     *
     * The body of an API call to this endpoint must include an array of recipient IDs of the recipients you want to delete.
     */
    public static function delete(?\SendGridSDK\DeleteParams\V3\Contactdb\Recipients $params = null): \SendGridSDK\Responses\V3\Contactdb\Recipients\Delete
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Recipients::class)->delete($params);
    }

    /** GET /v3/contactdb/recipients [operationId: ListRecipient] */
    /**
     * Retrieve recipients
     *
     * **This endpoint allows you to retrieve all of your Marketing Campaigns recipients.**
     *
     * Batch deletion of a page makes it possible to receive an empty page of recipients before reaching the end of
     * the list of recipients. To avoid this issue; iterate over pages until a 404 is retrieved.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Contactdb\Recipients $params = null): \SendGridSDK\Responses\V3\Contactdb\Recipients\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Recipients::class)->get($params);
    }

    /** PATCH /v3/contactdb/recipients [operationId: UpdateRecipient] */
    /**
     * Update Recipient
     *
     * **This endpoint allows you to update one or more recipients.**
     *
     * The body of an API call to this endpoint must include an array of one or more recipient objects.
     *
     * It is of note that you can add custom field data as parameters on recipient objects. We have provided an example using some of the default custom fields SendGrid provides.
     */
    public static function patch(?\SendGridSDK\PatchParams\V3\Contactdb\Recipients $params = null): \SendGridSDK\DTOs\Contactdb\RecipientResponse201
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Recipients::class)->patch($params);
    }

    /** POST /v3/contactdb/recipients [operationId: AddRecipient] */
    /**
     * Add recipients
     *
     * **This endpoint allows you to add a Marketing Campaigns recipient.**
     *
     * You can add custom field data as a parameter on this endpoint. We have provided an example using some of the default custom fields SendGrid provides.
     *
     * The rate limit is three requests every 2 seconds. You can upload 1000  contacts per request. So the maximum upload rate is 1500 recipients per second.
     */
    public static function post(?\SendGridSDK\PostParams\V3\Contactdb\Recipients $params = null): \SendGridSDK\DTOs\Contactdb\RecipientResponse201
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Recipients::class)->post($params);
    }

    /** DELETE /v3/contactdb/recipients/{recipient_id} [operationId: DeleteRecipient] */
    /**
     * Delete a Recipient
     *
     * **This endpoint allows you to delete a single recipient with the given ID from your contact database.**
     *
     * > Use this to permanently delete your recipients from all of your contact lists and all segments if required by applicable law.
     */
    public static function deleteByRecipientId(string $recipient_id, ?\SendGridSDK\DeleteParams\V3\Contactdb\Recipients\ByRecipientId $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Recipients::class)->deleteByRecipientId($recipient_id, $params);
    }

    /** GET /v3/contactdb/recipients/{recipient_id} [operationId: GetRecipient] */
    /**
     * Retrieve a single recipient
     *
     * **This endpoint allows you to retrieve a single recipient by ID from your contact database.**
     */
    public static function getByRecipientId(string $recipient_id, ?\SendGridSDK\GetParams\V3\Contactdb\Recipients\ByRecipientId $params = null): \SendGridSDK\DTOs\Contactdb\Recipient200
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Recipients::class)->getByRecipientId($recipient_id, $params);
    }
}
