<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing\Contacts;

final class Search extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/marketing/contacts/search [operationId: SearchContact] */
    /**
     * Search Contacts
     *
     * **Use this endpoint to locate contacts**.
     *
     * The request body's `query` field accepts valid [SGQL](https://sendgrid.com/docs/for-developers/sending-email/segmentation-query-language/) for searching for a contact.
     *
     * Because contact emails are stored in lower case, using SGQL to search by email address requires the provided email address to be in lower case. The SGQL `lower()` function can be used for this.
     *
     * Only the first 50 contacts that meet the search criteria will be returned.
     *
     * If the query takes longer than 20 seconds, a `408 Request Timeout` status will be returned.
     *
     * Formatting the `created_at` and `updated_at` values as Unix timestamps is deprecated. Instead, they are returned as ISO format as string.
     */
    public static function post(?\SendGridSDK\Requests\V3\Marketing\Contacts\Search\Post $payload = null): \SendGridSDK\Responses\V3\Marketing\Contacts\Search\Post
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Contacts\Search::class)->post();
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Contacts\Search::class)->post($payload);
    }
}
