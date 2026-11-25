<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Suppression;

final class Unsubscribes extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/suppression/unsubscribes',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Suppression\\Unsubscribes\\Get\\SuppressionUnsubscribesCollection',
    ];

    /**
     * Retrieve all global suppressions
     *
     * **This endpoint allows you to retrieve a paginated list of all email address that are globally suppressed.**
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public function get(?\SendGridSDK\GetParams\V3\Suppression\Unsubscribes $params = null): \SendGridSDK\Collections\V3\Suppression\Unsubscribes\Get\SuppressionUnsubscribesCollection
    {
        /** @var \SendGridSDK\Collections\V3\Suppression\Unsubscribes\Get\SuppressionUnsubscribesCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
