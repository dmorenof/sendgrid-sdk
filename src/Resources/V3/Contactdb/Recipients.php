<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Contactdb;

final class Recipients extends \SendGridSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/contactdb/recipients',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
            401 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Contactdb\\Recipients\\Delete',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Collections\\StringCollection',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Delete Recipients
     *
     * **This endpoint allows you to deletes one or more recipients.**
     *
     * The body of an API call to this endpoint must include an array of recipient IDs of the recipients you want to delete.
     */
    public function delete(?\SendGridSDK\DeleteParams\V3\Contactdb\Recipients $params = null): \SendGridSDK\Responses\V3\Contactdb\Recipients\Delete
    {
        /** @var \SendGridSDK\Responses\V3\Contactdb\Recipients\Delete $result */
        $result = $this->executeArguments(self::operation(self::DELETE), parameters: $params);
        return $result;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/contactdb/recipients',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant3Response',
            401 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant3Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Contactdb\\Recipients\\Get',
    ];

    /**
     * Retrieve recipients
     *
     * **This endpoint allows you to retrieve all of your Marketing Campaigns recipients.**
     *
     * Batch deletion of a page makes it possible to receive an empty page of recipients before reaching the end of
     * the list of recipients. To avoid this issue; iterate over pages until a 404 is retrieved.
     */
    public function get(?\SendGridSDK\GetParams\V3\Contactdb\Recipients $params = null): \SendGridSDK\Responses\V3\Contactdb\Recipients\Get
    {
        /** @var \SendGridSDK\Responses\V3\Contactdb\Recipients\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/v3/contactdb/recipients',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
            401 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Contactdb\\RecipientResponse201',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Collections\\RecipientBodyCollection',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update Recipient
     *
     * **This endpoint allows you to update one or more recipients.**
     *
     * The body of an API call to this endpoint must include an array of one or more recipient objects.
     *
     * It is of note that you can add custom field data as parameters on recipient objects. We have provided an example using some of the default custom fields SendGrid provides.
     */
    public function patch(?\SendGridSDK\PatchParams\V3\Contactdb\Recipients $params = null): \SendGridSDK\DTOs\Contactdb\RecipientResponse201
    {
        /** @var \SendGridSDK\DTOs\Contactdb\RecipientResponse201 $result */
        $result = $this->executeArguments(self::operation(self::PATCH), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/contactdb/recipients',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
            401 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Contactdb\\RecipientResponse201',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Collections\\AddRecipientBodyArray\\RecipientBodyCollection',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Add recipients
     *
     * **This endpoint allows you to add a Marketing Campaigns recipient.**
     *
     * You can add custom field data as a parameter on this endpoint. We have provided an example using some of the default custom fields SendGrid provides.
     *
     * The rate limit is three requests every 2 seconds. You can upload 1000  contacts per request. So the maximum upload rate is 1500 recipients per second.
     */
    public function post(?\SendGridSDK\PostParams\V3\Contactdb\Recipients $params = null): \SendGridSDK\DTOs\Contactdb\RecipientResponse201
    {
        /** @var \SendGridSDK\DTOs\Contactdb\RecipientResponse201 $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_RECIPIENT_ID = [
        'method' => 'DELETE',
        'path' => '/v3/contactdb/recipients/{recipient_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
            401 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
            404 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete a Recipient
     *
     * **This endpoint allows you to delete a single recipient with the given ID from your contact database.**
     *
     * > Use this to permanently delete your recipients from all of your contact lists and all segments if required by applicable law.
     */
    public function deleteByRecipientId(string $recipient_id, ?\SendGridSDK\DeleteParams\V3\Contactdb\Recipients\ByRecipientId $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_RECIPIENT_ID), path: ['recipient_id' => $recipient_id], parameters: $params);
        return;
    }

    private const array GET_BY_RECIPIENT_ID = [
        'method' => 'GET',
        'path' => '/v3/contactdb/recipients/{recipient_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant3Response',
            401 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant3Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Contactdb\\Recipient200',
    ];

    /**
     * Retrieve a single recipient
     *
     * **This endpoint allows you to retrieve a single recipient by ID from your contact database.**
     */
    public function getByRecipientId(string $recipient_id, ?\SendGridSDK\GetParams\V3\Contactdb\Recipients\ByRecipientId $params = null): \SendGridSDK\DTOs\Contactdb\Recipient200
    {
        /** @var \SendGridSDK\DTOs\Contactdb\Recipient200 $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_RECIPIENT_ID), path: ['recipient_id' => $recipient_id], parameters: $params);
        return $result;
    }
}
