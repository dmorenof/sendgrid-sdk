<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing\Lists\ById\Contacts;

final class Count extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/marketing/lists/{id}/contacts/count',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Lists\\ById\\Contacts\\Count\\Get',
    ];

    /**
     * Get List Contact Count
     *
     * **This endpoint returns the number of contacts on a specific list.**
     */
    public function get(string $id): \SendGridSDK\Responses\V3\Marketing\Lists\ById\Contacts\Count\Get
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Lists\ById\Contacts\Count\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id]);
        return $result;
    }
}
