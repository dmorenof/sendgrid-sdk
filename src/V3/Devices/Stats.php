<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Devices;

final class Stats extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/devices/stats [operationId: ListDeviceStat] */
    /**
     * Retrieve email statistics by device type.
     *
     * **This endpoint allows you to retrieve your email statistics segmented by the device type.**
     *
     * **We only store up to 7 days of email activity in our database.** By default, 500 items will be returned per request via the Advanced Stats API endpoints.
     *
     * ## Available Device Types
     * | **Device** | **Description** | **Example** |
     * |---|---|---|
     * | Desktop | Email software on desktop computer. | I.E., Outlook, Sparrow, or Apple Mail. |
     * | Webmail |	A web-based email client. | I.E., Yahoo, Google, AOL, or Outlook.com. |
     * | Phone | A smart phone. | iPhone, Android, Blackberry, etc.
     * | Tablet | A tablet computer. | iPad, android based tablet, etc. |
     * | Other | An unrecognized device. |
     *
     * Advanced Stats provide a more in-depth view of your email statistics and the actions taken by your recipients. You can segment these statistics by geographic location, device type, client type, browser, and mailbox provider. For more information about statistics, please see our [Statistics Overview](https://sendgrid.com/docs/ui/analytics-and-reporting/stats-overview/).
     */
    public static function get(\SendGridSDK\GetParams\V3\Devices\Stats $params): \SendGridSDK\Collections\V3\Devices\Stats\Get\DevicesStatsCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Devices\Stats::class)->get($params);
    }
}
