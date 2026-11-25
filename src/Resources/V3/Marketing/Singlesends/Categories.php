<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing\Singlesends;

final class Categories extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/marketing/singlesends/categories',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant6Response',
        ],
        'errorResponses' => [
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant6Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Singlesends\\Categories\\Get',
    ];

    /**
     * Get All Categories
     *
     * **This endpoint allows you to retrieve all the categories associated with your Single Sends.**
     *
     * This endpoint will return your latest 1,000 categories.
     */
    public function get(): \SendGridSDK\Responses\V3\Marketing\Singlesends\Categories\Get
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Singlesends\Categories\Get $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
