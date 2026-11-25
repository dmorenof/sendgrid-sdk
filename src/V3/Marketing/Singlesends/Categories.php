<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing\Singlesends;

final class Categories extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/marketing/singlesends/categories [operationId: ListCategory] */
    /**
     * Get All Categories
     *
     * **This endpoint allows you to retrieve all the categories associated with your Single Sends.**
     *
     * This endpoint will return your latest 1,000 categories.
     */
    public static function get(): \SendGridSDK\Responses\V3\Marketing\Singlesends\Categories\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Singlesends\Categories::class)->get();
    }
}
