<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing;

final class FieldDefinitions extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/marketing/field_definitions',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\FieldDefinitions\\Get',
        'responseValidation' => [
            'minProperties' => 0,
            'maxProperties' => 500,
        ],
    ];

    /**
     * Get All Field Definitions
     *
     * **This endpoint retrieves all defined Custom Fields and Reserved Fields.**
     */
    public function get(): \SendGridSDK\Responses\V3\Marketing\FieldDefinitions\Get
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\FieldDefinitions\Get $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/marketing/field_definitions',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant9Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant9Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\FieldDefinitions\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Marketing\\FieldDefinitions\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create Custom Field Definition
     *
     * **This endpoint creates a new custom field definition.**
     *
     * Custom field definitions are created with the given `name` and `field_type`. Although field names are stored in a case-sensitive manner, all field names must be case-insensitively unique. This means you may create a field named `CamelCase` or `camelcase`, but not both. Additionally, a Custom Field name cannot collide with any Reserved Field names. You should save the returned `id` value in order to update or delete the field at a later date. You can have up to 500 custom fields.
     *
     * The custom field name should be created using only alphanumeric characters (A-Z and 0-9) and underscores (\_). Custom fields can only begin with letters  A-Z or underscores (_). The field type can be date, text, or number fields. The field type is important for creating segments from your contact database.
     *
     * **Note: Creating a custom field that begins with a number will cause issues with sending in Marketing Campaigns.**
     */
    public function post(?\SendGridSDK\Requests\V3\Marketing\FieldDefinitions\Post $payload = null): \SendGridSDK\Responses\V3\Marketing\FieldDefinitions\Post
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\FieldDefinitions\Post $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

    private const array DELETE_BY_CUSTOM_FIELD_ID = [
        'method' => 'DELETE',
        'path' => '/v3/marketing/field_definitions/{custom_field_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant3Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant3Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete Custom Field Definition
     *
     * **This endpoint deletes a defined Custom Field.**
     *
     * You can delete only Custom Fields; Reserved Fields cannot be deleted.
     */
    public function deleteByCustomFieldId(string $custom_field_id): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_CUSTOM_FIELD_ID), path: ['custom_field_id' => $custom_field_id]);
        return;
    }

    private const array PATCH_BY_CUSTOM_FIELD_ID = [
        'method' => 'PATCH',
        'path' => '/v3/marketing/field_definitions/{custom_field_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant9Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant3Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant9Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant3Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\FieldDefinitions\\ByCustomFieldId\\Patch',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Marketing\\FieldDefinitions\\ByCustomFieldId\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update Custom Field Definition
     *
     * **This endpoint allows you to update a defined Custom Field.**
     *
     * Only your Custom fields can be modified; Reserved Fields cannot be updated.
     */
    public function patchByCustomFieldId(string $custom_field_id, ?\SendGridSDK\Requests\V3\Marketing\FieldDefinitions\ByCustomFieldId\Patch $payload = null): \SendGridSDK\Responses\V3\Marketing\FieldDefinitions\ByCustomFieldId\Patch
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\FieldDefinitions\ByCustomFieldId\Patch $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::PATCH_BY_CUSTOM_FIELD_ID), $payload, path: ['custom_field_id' => $custom_field_id]) : $this->executeArguments(self::operation(self::PATCH_BY_CUSTOM_FIELD_ID), path: ['custom_field_id' => $custom_field_id]);
        return $result;
    }
}
