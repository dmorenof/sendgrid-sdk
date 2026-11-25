<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Suppression;

final class Unsubscribes extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/suppression/unsubscribes [operationId: ListGlobalSuppression] */
    /**
     * Retrieve all global suppressions
     *
     * **This endpoint allows you to retrieve a paginated list of all email address that are globally suppressed.**
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Suppression\Unsubscribes $params = null): \SendGridSDK\Collections\V3\Suppression\Unsubscribes\Get\SuppressionUnsubscribesCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Suppression\Unsubscribes::class)->get($params);
    }
}
