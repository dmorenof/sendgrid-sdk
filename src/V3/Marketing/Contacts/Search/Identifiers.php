<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing\Contacts\Search;

final class Identifiers extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/marketing/contacts/search/identifiers/{identifier_type} [operationId: GetContactByIdentifiers] */
    /**
     * Get Contacts by Identifiers
     *
     * Use this endpoint to retrieve up to 100 contacts that match the requested identifier values for a single identifier type.
     *
     * `identifier_type` must be a valid identifier type: `email`, `phone_number_id`, `external_id`, or `anonymous_id`.
     *
     * Use this endpoint instead of the [Search Contacts endpoint](https://www.twilio.com/docs/sendgrid/api-reference/contacts/search-contacts) when you can provide exact identifiers and do not need to include other [Segmentation Query Language (SGQL)](https://www.twilio.com/docs/sendgrid/for-developers/sending-email/segmentation-query-language/) filters when searching.
     *
     * This endpoint returns a `200` status code when any contacts match the identifiers you supplied. When searching multiple identifier values in a single request, it is possible that some will match a contact while others will not. When a partially successful search like this is made, the matching contacts are returned in an object and an error message is returned for the identifier values that are not found.
     *
     * This endpoint returns a `404` status code when no contacts are found for the provided identifiers.
     *
     * This endpoint returns a `400` status code if any searched addresses are invalid.
     *
     * Twilio SendGrid recommends exporting your contacts regularly as a backup to avoid issues or lost data.
     *
     */
    public static function postByIdentifierType(\SendGridSDK\Enums\IdentifierType1 $identifier_type, ?\SendGridSDK\Requests\V3\Marketing\Contacts\Search\Identifiers\ByIdentifierType\Post $payload = null): \SendGridSDK\Responses\V3\Marketing\Contacts\Search\Identifiers\ByIdentifierType\Post
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Contacts\Search\Identifiers::class)->postByIdentifierType($identifier_type);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Contacts\Search\Identifiers::class)->postByIdentifierType($identifier_type, $payload);
    }
}
