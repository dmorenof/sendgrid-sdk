<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing\Contacts;

final class Search extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/marketing/contacts/search',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant8Response',
            401 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            408 => null,
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant8Response',
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
            408 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Contacts\\Search\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Marketing\\Contacts\\Search\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function post(?\SendGridSDK\Requests\V3\Marketing\Contacts\Search\Post $payload = null): \SendGridSDK\Responses\V3\Marketing\Contacts\Search\Post
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Contacts\Search\Post $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }
}
