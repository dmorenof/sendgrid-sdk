<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Contactdb\Recipients\ByRecipientId;

final class Lists extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/contactdb/recipients/{recipient_id}/lists [operationId: GetRecipientList] */
    /**
     * Retrieve the lists that a recipient is on
     *
     * **This endpoint allows you to retrieve the lists that a given recipient belongs to.**
     *
     * Each recipient can be on many lists. This endpoint gives you all of the lists that any one recipient has been added to.
     */
    public static function get(string $recipient_id, ?\SendGridSDK\GetParams\V3\Contactdb\Recipients\ByRecipientId\Lists $params = null): \SendGridSDK\Responses\V3\Contactdb\Recipients\ByRecipientId\Lists\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Recipients\ByRecipientId\Lists::class)->get($recipient_id, $params);
    }
}
