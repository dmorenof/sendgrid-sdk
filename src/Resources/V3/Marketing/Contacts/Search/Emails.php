<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing\Contacts\Search;

final class Emails extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/marketing/contacts/search/emails',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            401 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
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
                'type' => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Contacts\\Search\\Emails\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Marketing\\Contacts\\Search\\Emails\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Get Contacts by Emails
     *
     * **This endpoint allows you to retrieve up to 100 contacts matching the searched `email` address(es), including any `alternate_emails`.**
     *
     * Email addresses are unique to a contact, meaning this endpoint can treat an email address as a primary key to search by. The contact object associated with the address, whether it is their `email` or one of their `alternate_emails` will be returned if matched.
     *
     * Email addresses in the search request do not need to match the case in which they're stored, but the email addresses in the result will be all lower case. Empty strings are excluded from the search and will not be returned.
     *
     * This endpoint should be used in place of the "Search Contacts" endpoint when you can provide exact email addresses and do not need to include other [Segmentation Query Language (SGQL)](https://sendgrid.com/docs/for-developers/sending-email/segmentation-query-language/) filters when searching.
     *
     * If you need to access a large percentage of your contacts, we recommend exporting your contacts with the "Export Contacts" endpoint and filtering the client side results.
     *
     * This endpoint returns a `200` status code when any contacts match the address(es) you supplied. When searching multiple addresses in a single request, it is possible that some addresses will match a contact while others will not. When a partially successful search like this is made, the matching contacts are returned in an object and an error message is returned for the email address(es) that are not found.
     *
     * This endpoint returns a `404` status code when no contacts are found for the provided email address(es).
     *
     * A `400` status code is returned if any searched addresses are invalid.
     *
     * Twilio SendGrid recommends exporting your contacts regularly as a backup to avoid issues or lost data.
     */
    public function post(?\SendGridSDK\Requests\V3\Marketing\Contacts\Search\Emails\Post $payload = null): \SendGridSDK\Responses\V3\Marketing\Contacts\Search\Emails\Post
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Contacts\Search\Emails\Post $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }
}
