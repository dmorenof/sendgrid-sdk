<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing\Contacts\Search;

final class Identifiers extends \SendGridSDK\Client
{
    private const array POST_BY_IDENTIFIER_TYPE = [
        'method' => 'POST',
        'path' => '/v3/marketing/contacts/search/identifiers/{identifier_type}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\ContactsError',
            401 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            404 => '\\SendGridSDK\\DTOs\\ContactsError',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\ContactsError',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\ContactsError',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Contacts\\Search\\Identifiers\\ByIdentifierType\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Marketing\\Contacts\\Search\\Identifiers\\ByIdentifierType\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function postByIdentifierType(\SendGridSDK\Enums\IdentifierType1 $identifier_type, ?\SendGridSDK\Requests\V3\Marketing\Contacts\Search\Identifiers\ByIdentifierType\Post $payload = null): \SendGridSDK\Responses\V3\Marketing\Contacts\Search\Identifiers\ByIdentifierType\Post
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Contacts\Search\Identifiers\ByIdentifierType\Post $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST_BY_IDENTIFIER_TYPE), $payload, path: ['identifier_type' => $identifier_type]) : $this->executeArguments(self::operation(self::POST_BY_IDENTIFIER_TYPE), path: ['identifier_type' => $identifier_type]);
        return $result;
    }
}
