<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Browsers;

final class Stats extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/browsers/stats',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Browsers\\Stats\\Get\\BrowsersStatsCollection',
    ];

    /**
     * Retrieve email statistics by browser.
     *
     * **This endpoint allows you to retrieve your email statistics segmented by browser type.**
     * By default, 500 items will be returned per request via the Advanced Stats API endpoints.
     * Advanced Stats provide a more in-depth view of your email statistics and the actions taken by your recipients. You can segment these statistics by geographic location, device type, client type, browser, and mailbox provider. For more information about statistics, please see our [Statistics Overview](https://sendgrid.com/docs/ui/analytics-and-reporting/stats-overview/).
     */
    public function get(\SendGridSDK\GetParams\V3\Browsers\Stats $params): \SendGridSDK\Collections\V3\Browsers\Stats\Get\BrowsersStatsCollection
    {
        /** @var \SendGridSDK\Collections\V3\Browsers\Stats\Get\BrowsersStatsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
