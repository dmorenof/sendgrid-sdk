<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing;

final class FieldDefinitions extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/marketing/field_definitions [operationId: ListFieldDefinition] */
    /**
     * Get All Field Definitions
     *
     * **This endpoint retrieves all defined Custom Fields and Reserved Fields.**
     */
    public static function get(): \SendGridSDK\Responses\V3\Marketing\FieldDefinitions\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\FieldDefinitions::class)->get();
    }

    /** POST /v3/marketing/field_definitions [operationId: CreateFieldDefinition] */
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
    public static function post(?\SendGridSDK\Requests\V3\Marketing\FieldDefinitions\Post $payload = null): \SendGridSDK\Responses\V3\Marketing\FieldDefinitions\Post
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\FieldDefinitions::class)->post();
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\FieldDefinitions::class)->post($payload);
    }

    /** DELETE /v3/marketing/field_definitions/{custom_field_id} [operationId: DeleteFieldDefinition] */
    /**
     * Delete Custom Field Definition
     *
     * **This endpoint deletes a defined Custom Field.**
     *
     * You can delete only Custom Fields; Reserved Fields cannot be deleted.
     */
    public static function deleteByCustomFieldId(string $custom_field_id): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Marketing\FieldDefinitions::class)->deleteByCustomFieldId($custom_field_id);
    }

    /** PATCH /v3/marketing/field_definitions/{custom_field_id} [operationId: UpdateFieldDefinition] */
    /**
     * Update Custom Field Definition
     *
     * **This endpoint allows you to update a defined Custom Field.**
     *
     * Only your Custom fields can be modified; Reserved Fields cannot be updated.
     */
    public static function patchByCustomFieldId(string $custom_field_id, ?\SendGridSDK\Requests\V3\Marketing\FieldDefinitions\ByCustomFieldId\Patch $payload = null): \SendGridSDK\Responses\V3\Marketing\FieldDefinitions\ByCustomFieldId\Patch
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\FieldDefinitions::class)->patchByCustomFieldId($custom_field_id);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\FieldDefinitions::class)->patchByCustomFieldId($custom_field_id, $payload);
    }
}
