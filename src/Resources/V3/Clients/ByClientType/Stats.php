<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Clients\ByClientType;

final class Stats extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/clients/{client_type}/stats',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Clients\\ByClientType\\Stats\\Get\\ByClientTypeStatsCollection',
    ];

    /**
     * Retrieve stats by a specific client type.
     *
     * **This endpoint allows you to retrieve your email statistics segmented by a specific client type.**
     *
     * By default, 500 items will be returned per request via the Advanced Stats API endpoints.
     *
     * ### Available Client Types
     * - phone
     * - tablet
     * - webmail
     * - desktop
     *
     * Advanced Stats provide a more in-depth view of your email statistics and the actions taken by your recipients. You can segment these statistics by geographic location, device type, client type, browser, and mailbox provider. For more information about statistics, please see our [Statistics Overview](https://sendgrid.com/docs/ui/analytics-and-reporting/stats-overview/).
     */
    public function get(\SendGridSDK\Enums\ClientType $client_type, \SendGridSDK\GetParams\V3\Clients\ByClientType\Stats $params): \SendGridSDK\Collections\V3\Clients\ByClientType\Stats\Get\ByClientTypeStatsCollection
    {
        /** @var \SendGridSDK\Collections\V3\Clients\ByClientType\Stats\Get\ByClientTypeStatsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['client_type' => $client_type], parameters: $params);
        return $result;
    }
}
