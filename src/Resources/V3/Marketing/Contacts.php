<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing;

final class Contacts extends \SendGridSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/marketing/contacts',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            202,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant6Response',
            401 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant6Response',
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
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Contacts\\Delete',
    ];

    /**
     * Delete Contacts
     *
     * **This endpoint can be used to delete one or more contacts**.
     *
     * The query parameter `ids` must set to a comma-separated list of contact IDs for bulk contact deletion.
     *
     * The query parameter `delete_all_contacts` must be set to `"true"` to delete **all** contacts.
     *
     * You must set either `ids` or `delete_all_contacts`.
     *
     * Deletion jobs are processed asynchronously.
     *
     * Twilio SendGrid recommends exporting your contacts regularly as a backup to avoid issues or lost data.
     */
    public function delete(?\SendGridSDK\DeleteParams\V3\Marketing\Contacts $params = null): \SendGridSDK\Responses\V3\Marketing\Contacts\Delete
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Contacts\Delete $result */
        $result = $this->executeArguments(self::operation(self::DELETE), parameters: $params);
        return $result;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/marketing/contacts',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant7Response',
            401 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Response',
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
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Contacts\\Get',
    ];

    /**
     * Get Sample Contacts
     *
     * **This endpoint will return up to 50 of the most recent contacts uploaded or attached to a list**.
     *
     * This list will then be sorted by email address.
     *
     * The full contact count is also returned.
     *
     * Please note that pagination of the contacts has been deprecated.
     *
     * Twilio SendGrid recommends exporting your contacts regularly as a backup to avoid issues or lost data.
     */
    public function get(): \SendGridSDK\Responses\V3\Marketing\Contacts\Get
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Contacts\Get $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/marketing/contacts',
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
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Contacts\\Put',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Marketing\\Contacts\\Put',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Add or Update a Contact
     *
     * **This endpoint allows the [upsert](https://en.wiktionary.org/wiki/upsert) (insert or update) of up to 30,000 contacts, or 6MB of data, whichever is lower**.
     * Because the creation and update of contacts is an asynchronous process, the response will not contain immediate feedback on the processing of your upserted contacts. Rather, it will contain an HTTP 202 response indicating the contacts are queued for processing or an HTTP 4XX error containing validation errors. Should you wish to get the resulting contact's ID or confirm that your contacts have been updated or added, you can use the [Get Contacts by Identifiers operation](https://www.twilio.com/docs/sendgrid/api-reference/contacts/get-contacts-by-identifiers).
     * Please note that custom fields need to have been already created if you wish to set their values for the contacts being upserted. To do this, please use the [Create Custom Field Definition endpoint](https://www.twilio.com/docs/sendgrid/api-reference/custom-fields/create-custom-field-definition).
     * You will see a `job_id` in the response to your request. This can be used to check the status of your upsert job. To do so, please use the [Import Contacts Status endpoint](https://www.twilio.com/docs/sendgrid/api-reference/contacts/import-contacts-status).
     * If the contact already exists in the system, any entries submitted via this endpoint will update the existing contact. In order to update a contact, all of its existing identifiers must be present. Any fields omitted from the request will remain as they were. A contact's ID cannot be used to update the contact.
     * The email field will be changed to all lower-case. If a contact is added with an email that exists but contains capital letters, the existing contact with the all lower-case email will be updated.
     */
    public function put(?\SendGridSDK\Requests\V3\Marketing\Contacts\Put $payload = null): \SendGridSDK\Responses\V3\Marketing\Contacts\Put
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Contacts\Put $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::PUT), $payload) : $this->executeArguments(self::operation(self::PUT));
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v3/marketing/contacts/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            404 => null,
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
                'type' => null,
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Contact\\Details3',
    ];

    /**
     * Get a Contact by ID
     *
     * **This endpoint returns the full details and all fields for the specified contact**.
     * The "Get Contacts by Identifier" endpoint can be used to get the ID of a contact.
     */
    public function getById(string $id): \SendGridSDK\DTOs\Contact\Details3
    {
        /** @var \SendGridSDK\DTOs\Contact\Details3 $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id]);
        return $result;
    }
}
