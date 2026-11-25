<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing\Contacts;

final class Batch extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/marketing/contacts/batch',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Contacts\\Batch\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Marketing\\Contacts\\Batch\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function post(?\SendGridSDK\Requests\V3\Marketing\Contacts\Batch\Post $payload = null): \SendGridSDK\Responses\V3\Marketing\Contacts\Batch\Post
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Contacts\Batch\Post $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }
}
