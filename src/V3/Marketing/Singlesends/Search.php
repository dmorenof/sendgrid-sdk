<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing\Singlesends;

final class Search extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/marketing/singlesends/search [operationId: SearchSingleSend] */
    /**
     * Get Single Sends Search
     *
     * **This endpoint allows you to search for Single Sends based on specified criteria.**
     *
     * You can search for Single Sends by passing a combination of values using the `name`, `status`, and `categories` request body fields.
     *
     * For example, if you want to search for all Single Sends that are "drafts" or "scheduled" and also associated with the category "shoes," your request body may look like the example below.
     *
     * ```javascript
     * {
     *   "status": [
     *     "draft",
     *     "scheduled"
     *   ],
     *   "categories": [
     *     "shoes"
     *   ],
     * }
     * ```
     */
    public static function post(?\SendGridSDK\PostParams\V3\Marketing\Singlesends\Search $params = null): \SendGridSDK\Responses\V3\Marketing\Singlesends\Search\Post
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Singlesends\Search::class)->post($params);
    }
}
