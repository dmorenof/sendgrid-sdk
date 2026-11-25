<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing\Lists\ById\Contacts;

final class Count extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/marketing/lists/{id}/contacts/count [operationId: ListContactCountMcLists] */
    /**
     * Get List Contact Count
     *
     * **This endpoint returns the number of contacts on a specific list.**
     */
    public static function get(string $id): \SendGridSDK\Responses\V3\Marketing\Lists\ById\Contacts\Count\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Lists\ById\Contacts\Count::class)->get($id);
    }
}
