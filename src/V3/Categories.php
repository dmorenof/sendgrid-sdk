<?php

declare(strict_types=1);

namespace SendGridSDK\V3;

final class Categories extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/categories [operationId: ListCategoryStats] */
    /**
     * Retrieve all categories
     *
     * **This endpoint allows you to retrieve a paginated list of all of your categories.**
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Categories $params = null): \SendGridSDK\Collections\V3\Categories\Get\CategoriesCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Categories::class)->get($params);
    }
}
