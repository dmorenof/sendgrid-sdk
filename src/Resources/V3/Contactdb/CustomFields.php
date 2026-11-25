<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Contactdb;

final class CustomFields extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/contactdb/custom_fields',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Contactdb\\CustomFields\\Get',
    ];

    /**
     * Retrieve all custom fields
     *
     * **This endpoint allows you to retrieve all custom fields.**
     */
    public function get(?\SendGridSDK\GetParams\V3\Contactdb\CustomFields $params = null): \SendGridSDK\Responses\V3\Contactdb\CustomFields\Get
    {
        /** @var \SendGridSDK\Responses\V3\Contactdb\CustomFields\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/contactdb/custom_fields',
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
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Contactdb\\CustomFieldId2Xx',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Contactdb\\CustomFields\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a Custom Field
     *
     * **This endpoint allows you to create a custom field.**
     *
     * **You can create up to 120 custom fields.**
     */
    public function post(?\SendGridSDK\PostParams\V3\Contactdb\CustomFields $params = null): \SendGridSDK\DTOs\Contactdb\CustomFieldId2Xx
    {
        /** @var \SendGridSDK\DTOs\Contactdb\CustomFieldId2Xx $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_CUSTOM_FIELD_ID = [
        'method' => 'DELETE',
        'path' => '/v3/contactdb/custom_fields/{custom_field_id}',
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
        'responseType' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
    ];

    /**
     * Delete a Custom Field
     *
     * **This endpoint allows you to delete a custom field by ID.**
     */
    public function deleteByCustomFieldId(int $custom_field_id, ?\SendGridSDK\DeleteParams\V3\Contactdb\CustomFields\ByCustomFieldId $params = null): \SendGridSDK\DTOs\LmcContactdb\Error\Response
    {
        /** @var \SendGridSDK\DTOs\LmcContactdb\Error\Response $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_CUSTOM_FIELD_ID), path: ['custom_field_id' => $custom_field_id], parameters: $params);
        return $result;
    }

    private const array GET_BY_CUSTOM_FIELD_ID = [
        'method' => 'GET',
        'path' => '/v3/contactdb/custom_fields/{custom_field_id}',
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
        'responseType' => '\\SendGridSDK\\DTOs\\Contactdb\\CustomFieldId2Xx',
    ];

    /**
     * Retrieve a Custom Field
     *
     * **This endpoint allows you to retrieve a custom field by ID.**
     */
    public function getByCustomFieldId(int $custom_field_id, ?\SendGridSDK\GetParams\V3\Contactdb\CustomFields\ByCustomFieldId $params = null): \SendGridSDK\DTOs\Contactdb\CustomFieldId2Xx
    {
        /** @var \SendGridSDK\DTOs\Contactdb\CustomFieldId2Xx $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CUSTOM_FIELD_ID), path: ['custom_field_id' => $custom_field_id], parameters: $params);
        return $result;
    }
}
