<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Contactdb;

final class ReservedFields extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/contactdb/reserved_fields [operationId: ListReservedField] */
    /**
     * Retrieve reserved fields
     *
     * **This endpoint allows you to list all fields that are reserved and can't be used for custom field names.**
     */
    public static function get(?\SendGridSDK\GetParams\V3\Contactdb\ReservedFields $params = null): \SendGridSDK\Responses\V3\Contactdb\ReservedFields\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\ReservedFields::class)->get($params);
    }
}
