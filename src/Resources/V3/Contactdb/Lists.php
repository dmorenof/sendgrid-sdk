<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Contactdb;

final class Lists extends \SendGridSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/contactdb/lists',
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
        'requestBody' => [
            'type' => '\\SendGridSDK\\Collections\\IntegerCollection',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Delete Multiple lists
     *
     * **This endpoint allows you to delete multiple recipient lists.**
     */
    public function delete(?\SendGridSDK\DeleteParams\V3\Contactdb\Lists $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE), parameters: $params);
        return;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/contactdb/lists',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Contactdb\\Lists\\Get',
    ];

    /**
     * Retrieve all lists
     *
     * **This endpoint allows you to retrieve all of your recipient lists. If you don't have any lists, an empty array will be returned.**
     */
    public function get(?\SendGridSDK\GetParams\V3\Contactdb\Lists $params = null): \SendGridSDK\Responses\V3\Contactdb\Lists\Get
    {
        /** @var \SendGridSDK\Responses\V3\Contactdb\Lists\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/contactdb/lists',
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
        'responseType' => '\\SendGridSDK\\DTOs\\Contactdb\\List2Xx',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Contactdb\\Lists\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a List
     *
     * **This endpoint allows you to create a list for your recipients.**
     */
    public function post(?\SendGridSDK\PostParams\V3\Contactdb\Lists $params = null): \SendGridSDK\DTOs\Contactdb\List2Xx
    {
        /** @var \SendGridSDK\DTOs\Contactdb\List2Xx $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_LIST_ID = [
        'method' => 'DELETE',
        'path' => '/v3/contactdb/lists/{list_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            202,
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
     * Delete a List
     *
     * **This endpoint allows you to delete a specific recipient list with the given ID.**
     */
    public function deleteByListId(int $list_id, ?\SendGridSDK\DeleteParams\V3\Contactdb\Lists\ByListId $params = null): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_LIST_ID), path: ['list_id' => $list_id], parameters: $params);
        return $result;
    }

    private const array GET_BY_LIST_ID = [
        'method' => 'GET',
        'path' => '/v3/contactdb/lists/{list_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
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
        'responseType' => '\\SendGridSDK\\DTOs\\Contactdb\\List2Xx',
    ];

    /**
     * Retrieve a single list
     *
     * **This endpoint allows you to retrieve a single recipient list.**
     */
    public function getByListId(int $list_id, ?\SendGridSDK\GetParams\V3\Contactdb\Lists\ByListId $params = null): \SendGridSDK\DTOs\Contactdb\List2Xx
    {
        /** @var \SendGridSDK\DTOs\Contactdb\List2Xx $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_LIST_ID), path: ['list_id' => $list_id], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_LIST_ID = [
        'method' => 'PATCH',
        'path' => '/v3/contactdb/lists/{list_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
            404 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Contactdb\\Lists\\ByListId\\Patch',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Contactdb\\Lists\\ByListId\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update a List
     *
     * **This endpoint allows you to update the name of one of your recipient lists.**
     */
    public function patchByListId(int $list_id, ?\SendGridSDK\PatchParams\V3\Contactdb\Lists\ByListId $params = null): \SendGridSDK\Responses\V3\Contactdb\Lists\ByListId\Patch
    {
        /** @var \SendGridSDK\Responses\V3\Contactdb\Lists\ByListId\Patch $result */
        $result = $this->executeArguments(self::operation(self::PATCH_BY_LIST_ID), path: ['list_id' => $list_id], parameters: $params);
        return $result;
    }
}
