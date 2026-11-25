<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing\Contacts;

final class Batch extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/marketing/contacts/batch [operationId: ListBatchedContact] */
    /**
     * Get Batched Contacts by IDs
     *
     * **This endpoint is used to retrieve a set of contacts identified by their IDs.**
     *
     * This can be more efficient endpoint to get contacts than making a series of individual `GET` requests to the "Get a Contact by ID" endpoint.
     *
     * You can supply up to 100 IDs. Pass them into the `ids` field in your request body as an array or one or more strings.
     *
     * Twilio SendGrid recommends exporting your contacts regularly as a backup to avoid issues or lost data.
     */
    public static function post(?\SendGridSDK\Requests\V3\Marketing\Contacts\Batch\Post $payload = null): \SendGridSDK\Responses\V3\Marketing\Contacts\Batch\Post
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Contacts\Batch::class)->post();
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Contacts\Batch::class)->post($payload);
    }
}
