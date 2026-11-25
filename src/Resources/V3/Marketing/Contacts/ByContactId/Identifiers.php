<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing\Contacts\ByContactId;

final class Identifiers extends \SendGridSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/marketing/contacts/{contact_id}/identifiers',
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
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Contacts\\ByContactId\\Identifiers\\Delete',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Marketing\\Contacts\\ByContactId\\Identifiers\\Delete',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Delete a Contact Identifier
     *
     * **This endpoint can be used to delete one identifier from a contact.**
     *
     * Deletion jobs are processed asynchronously.
     *
     * Note this is different from deleting a contact. If the contact has only one identifier, the asynchronous request will fail. All contacts are required to have at least one identifier.
     *
     * The request body field `identifier_type` must have a valid value of "EMAIL", "PHONENUMBERID", "EXTERNALID", or "ANONYMOUSID".
     *
     */
    public function delete(string $contact_id, ?\SendGridSDK\Requests\V3\Marketing\Contacts\ByContactId\Identifiers\Delete $payload = null): \SendGridSDK\Responses\V3\Marketing\Contacts\ByContactId\Identifiers\Delete
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Contacts\ByContactId\Identifiers\Delete $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::DELETE), $payload, path: ['contact_id' => $contact_id]) : $this->executeArguments(self::operation(self::DELETE), path: ['contact_id' => $contact_id]);
        return $result;
    }
}
