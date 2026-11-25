<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing\Lists\ById;

final class Contacts extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** DELETE /v3/marketing/lists/{id}/contacts [operationId: DeleteContactMcLists] */
    /**
     * Remove Contacts from a List
     *
     * **This endpoint allows you to remove contacts from a given list.**
     *
     * The contacts will not be deleted. Only their list membership will be changed.
     */
    public static function delete(string $id, \SendGridSDK\DeleteParams\V3\Marketing\Lists\ById\Contacts $params): \SendGridSDK\Responses\V3\Marketing\Lists\ById\Contacts\Delete
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Lists\ById\Contacts::class)->delete($id, $params);
    }
}
