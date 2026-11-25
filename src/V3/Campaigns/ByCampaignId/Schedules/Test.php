<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Campaigns\ByCampaignId\Schedules;

final class Test extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/campaigns/{campaign_id}/schedules/test [operationId: SendTestCampaign] */
    /**
     * Send a Test Campaign
     *
     * **This endpoint allows you to send a test campaign.**
     *
     * To send to multiple addresses, use an array for the JSON "to" value ["one&#64;address","two&#64;address"]
     */
    public static function post(int $campaign_id, ?\SendGridSDK\PostParams\V3\Campaigns\ByCampaignId\Schedules\Test $params = null): \SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Schedules\Test\Post
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Campaigns\ByCampaignId\Schedules\Test::class)->post($campaign_id, $params);
    }
}
