<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing\Singlesends;

final class Search extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/marketing/singlesends/search',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant6Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant6Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Singlesends\\Search\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Singlesend\\Search',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function post(?\SendGridSDK\PostParams\V3\Marketing\Singlesends\Search $params = null): \SendGridSDK\Responses\V3\Marketing\Singlesends\Search\Post
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Singlesends\Search\Post $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }
}
