<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing\Contacts;

final class Imports extends \SendGridSDK\Client
{
    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/marketing/contacts/imports',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\V3\\Marketing\\Contacts\\Imports\\PutStatus400Response',
            401 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\V3\\Marketing\\Contacts\\Imports\\PutStatus404Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Marketing\\Contacts\\Imports\\PutStatus400Response',
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
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Marketing\\Contacts\\Imports\\PutStatus404Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Contacts\\Imports\\Put',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Marketing\\Contacts\\Imports\\Put',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Import Contacts
     *
     * **This endpoint allows a CSV upload containing up to one million contacts or 5GB of data, whichever is smaller. At least one identifier is required for a successful import.**
     *
     * Imports take place asynchronously: the endpoint returns a URL (`upload_uri`) and HTTP headers (`upload_headers`) which can subsequently be used to `PUT` a file of contacts to be imported into our system.
     *
     * Uploaded CSV files may also be [gzip-compressed](https://en.wikipedia.org/wiki/Gzip).
     *
     * In either case, you must include the field `file_type` with the value `csv` in your request body.
     *
     * The `field_mappings` parameter is a respective list of field definition IDs to map the uploaded CSV columns to. It allows you to use CSVs where one or more columns are skipped (`null`) or remapped to the contact field.
     *
     * For example, if `field_mappings` is set to `[null, "w1", "_rf1"]`, this means skip column 0, map column 1 to the custom field with the ID `w1`, and map column 2 to the reserved field with the ID `_rf1`. See the "Get All Field Definitions" endpoint to fetch your custom and reserved field IDs to use with `field_mappings`.
     *
     * Once you receive the response body you can then initiate a **second** API call where you use the supplied URL and HTTP header to upload your file. For example:
     *
     * `curl --upload-file "file/path.csv" "URL_GIVEN" -H "HEADER_GIVEN"`
     *
     * If you would like to monitor the status of your import job, use the `job_id` and the "Import Contacts Status" endpoint.
     *
     * Twilio SendGrid recommends exporting your contacts regularly as a backup to avoid issues or lost data.
     *
     */
    public function put(?\SendGridSDK\Requests\V3\Marketing\Contacts\Imports\Put $payload = null): \SendGridSDK\Responses\V3\Marketing\Contacts\Imports\Put
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Contacts\Imports\Put $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::PUT), $payload) : $this->executeArguments(self::operation(self::PUT));
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v3/marketing/contacts/imports/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\V3\\Marketing\\Contacts\\Imports\\ById\\GetStatus400Response',
            401 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Marketing\\Contacts\\Imports\\ById\\GetStatus400Response',
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
        'responseType' => '\\SendGridSDK\\DTOs\\Contact\\Import',
    ];

    /**
     * Import Contacts Status
     *
     * **This endpoint can be used to check the status of a contact import job**.
     *
     * Use the `job_id` from the "Import Contacts," "Add or Update a Contact," or "Delete Contacts" endpoints as the `id` in the path parameter.
     *
     * If there is an error with your `PUT` request, download the `errors_url` file and open it to view more details.
     *
     * The job `status` field indicates whether the job is `pending`, `completed`, `errored`, or `failed`.
     *
     * Pending means not started. Completed means finished without any errors. Errored means finished with some errors. Failed means finished with all errors, or the job was entirely unprocessable: for example, if you attempt to import file format we do not support.
     *
     * The `results` object will have fields depending on the job type.
     *
     * Twilio SendGrid recommends exporting your contacts regularly as a backup to avoid issues or lost data.
     */
    public function getById(string $id): \SendGridSDK\DTOs\Contact\Import
    {
        /** @var \SendGridSDK\DTOs\Contact\Import $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id]);
        return $result;
    }
}
