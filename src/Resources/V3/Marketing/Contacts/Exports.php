<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing\Contacts;

final class Exports extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/marketing/contacts/exports',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Response',
            401 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Response',
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
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Contacts\\Exports\\Get',
    ];

    /**
     * Get All Existing Exports
     *
     * **Use this endpoint to retrieve details of all current exported jobs**.
     *
     * It will return an array of objects, each of which records an export job in flight or recently completed.
     *
     * Each object's `export_type` field will tell you which kind of export it is and its `status` field will indicate what stage of processing it has reached. Exports which are `ready` will be accompanied by a `urls` field which lists the URLs of the export's downloadable files — there will be more than one if you specified a maximum file size in your initial export request.
     *
     * Use this endpoint if you have exports in flight but do not know their IDs, which are required for the "Export Contacts Status" endpoint.
     */
    public function get(): \SendGridSDK\Responses\V3\Marketing\Contacts\Exports\Get
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Contacts\Exports\Get $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/marketing/contacts/exports',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            202,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant7Response',
            401 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant7Response',
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
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Contacts\\Exports\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Marketing\\Contacts\\Exports\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Export Contacts
     *
     * **Use this endpoint to export lists or segments of contacts**.
     *
     * If you would just like to have a link to the exported list sent to your email set the `notifications.email` option to `true` in the `POST` payload.
     *
     * If you would like to download the list, take the `id` that is returned and use the "Export Contacts Status" endpoint to get the `urls`. Once you have the list of URLs, make a `GET` request to each URL provided to download your CSV file(s).
     *
     * You specify the segments and or/contact lists you wish to export by providing the relevant IDs in, respectively, the `segment_ids` and `list_ids` fields in the request body.
     *
     * The lists will be provided in either JSON or CSV files. To specify which of these you would required, set the request body `file_type` field to `json` or `csv`.
     *
     * You can also specify a maximum file size (in MB). If the export file is larger than this, it will be split into multiple files.
     */
    public function post(?\SendGridSDK\Requests\V3\Marketing\Contacts\Exports\Post $payload = null): \SendGridSDK\Responses\V3\Marketing\Contacts\Exports\Post
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Contacts\Exports\Post $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v3/marketing/contacts/exports/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant7Response',
            401 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant7Response',
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
        'responseType' => '\\SendGridSDK\\DTOs\\Contact\\Export',
    ];

    /**
     * Export Contacts Status
     *
     * **This endpoint can be used to check the status of a contact export job**.
     *
     * To use this call, you will need the `id` from the "Export Contacts" call.
     *
     * If you would like to download a list, take the `id` that is returned from the "Export Contacts" endpoint and make an API request here to get the `urls`. Once you have the list of URLs, make a `GET` request on each URL to download your CSV file(s).
     *
     * Twilio SendGrid recommends exporting your contacts regularly as a backup to avoid issues or lost data.
     */
    public function getById(string $id): \SendGridSDK\DTOs\Contact\Export
    {
        /** @var \SendGridSDK\DTOs\Contact\Export $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id]);
        return $result;
    }
}
