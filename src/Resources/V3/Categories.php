<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3;

final class Categories extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/categories',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\V3\\Categories\\GetStatus400Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Categories\\GetStatus400Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Categories\\Get\\CategoriesCollection',
    ];

    /**
     * Retrieve all categories
     *
     * **This endpoint allows you to retrieve a paginated list of all of your categories.**
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public function get(?\SendGridSDK\GetParams\V3\Categories $params = null): \SendGridSDK\Collections\V3\Categories\Get\CategoriesCollection
    {
        /** @var \SendGridSDK\Collections\V3\Categories\Get\CategoriesCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
