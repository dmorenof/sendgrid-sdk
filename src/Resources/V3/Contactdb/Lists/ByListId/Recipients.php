<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Contactdb\Lists\ByListId;

final class Recipients extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/contactdb/lists/{list_id}/recipients',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Contactdb\\Lists\\ByListId\\Recipients\\Get',
    ];

    /**
     * Retrieve all recipients on a List
     *
     * **This endpoint allows you to retrieve all recipients on the list with the given ID.**
     */
    public function get(int $list_id, ?\SendGridSDK\GetParams\V3\Contactdb\Lists\ByListId\Recipients $params = null): \SendGridSDK\Responses\V3\Contactdb\Lists\ByListId\Recipients\Get
    {
        /** @var \SendGridSDK\Responses\V3\Contactdb\Lists\ByListId\Recipients\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['list_id' => $list_id], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/contactdb/lists/{list_id}/recipients',
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
        'responseType' => 'mixed',
        'schemaNullable' => true,
        'requestBody' => [
            'type' => '\\SendGridSDK\\Collections\\StringCollection',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Add Multiple Recipients to a List
     *
     * **This endpoint allows you to add multiple recipients to a list.**
     *
     * Adds existing recipients to a list, passing in the recipient IDs to add. Recipient IDs (base64-encoded email addresses) should be passed exactly as they are returned from recipient endpoints.
     */
    public function post(int $list_id, ?\SendGridSDK\PostParams\V3\Contactdb\Lists\ByListId\Recipients $params = null): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['list_id' => $list_id], parameters: $params);
        return $result;
    }

    private const array DELETE_BY_RECIPIENT_ID = [
        'method' => 'DELETE',
        'path' => '/v3/contactdb/lists/{list_id}/recipients/{recipient_id}',
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
     * Delete a Single Recipient from a Single List
     *
     * **This endpoint allows you to delete a single recipient from a list.**
     */
    public function deleteByRecipientId(\SendGridSDK\PathParams\V3\Contactdb\Lists\ByListId\Recipients\ByRecipientId $identifier, ?\SendGridSDK\DeleteParams\V3\Contactdb\Lists\ByListId\Recipients\ByRecipientId $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_RECIPIENT_ID), path: $identifier, parameters: $params);
        return;
    }

    private const array POST_BY_RECIPIENT_ID = [
        'method' => 'POST',
        'path' => '/v3/contactdb/lists/{list_id}/recipients/{recipient_id}',
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
        'responseType' => 'mixed',
        'schemaNullable' => true,
    ];

    /**
     * Add a Single Recipient to a List
     *
     * **This endpoint allows you to add a single recipient to a list.**
     */
    public function postByRecipientId(\SendGridSDK\PathParams\V3\Contactdb\Lists\ByListId\Recipients\ByRecipientId $identifier, ?\SendGridSDK\PostParams\V3\Contactdb\Lists\ByListId\Recipients\ByRecipientId $params = null): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_RECIPIENT_ID), path: $identifier, parameters: $params);
        return $result;
    }
}
