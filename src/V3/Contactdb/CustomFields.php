<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Contactdb;

final class CustomFields extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/contactdb/custom_fields [operationId: ListCustomField] */
    /**
     * Retrieve all custom fields
     *
     * **This endpoint allows you to retrieve all custom fields.**
     */
    public static function get(?\SendGridSDK\GetParams\V3\Contactdb\CustomFields $params = null): \SendGridSDK\Responses\V3\Contactdb\CustomFields\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\CustomFields::class)->get($params);
    }

    /** POST /v3/contactdb/custom_fields [operationId: CreateCustomField] */
    /**
     * Create a Custom Field
     *
     * **This endpoint allows you to create a custom field.**
     *
     * **You can create up to 120 custom fields.**
     */
    public static function post(?\SendGridSDK\PostParams\V3\Contactdb\CustomFields $params = null): \SendGridSDK\DTOs\Contactdb\CustomFieldId2Xx
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\CustomFields::class)->post($params);
    }

    /** DELETE /v3/contactdb/custom_fields/{custom_field_id} [operationId: DeleteCustomField] */
    /**
     * Delete a Custom Field
     *
     * **This endpoint allows you to delete a custom field by ID.**
     */
    public static function deleteByCustomFieldId(int $custom_field_id, ?\SendGridSDK\DeleteParams\V3\Contactdb\CustomFields\ByCustomFieldId $params = null): \SendGridSDK\DTOs\LmcContactdb\Error\Response
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\CustomFields::class)->deleteByCustomFieldId($custom_field_id, $params);
    }

    /** GET /v3/contactdb/custom_fields/{custom_field_id} [operationId: GetCustomField] */
    /**
     * Retrieve a Custom Field
     *
     * **This endpoint allows you to retrieve a custom field by ID.**
     */
    public static function getByCustomFieldId(int $custom_field_id, ?\SendGridSDK\GetParams\V3\Contactdb\CustomFields\ByCustomFieldId $params = null): \SendGridSDK\DTOs\Contactdb\CustomFieldId2Xx
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\CustomFields::class)->getByCustomFieldId($custom_field_id, $params);
    }
}
