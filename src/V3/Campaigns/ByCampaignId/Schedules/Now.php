<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Campaigns\ByCampaignId\Schedules;

final class Now extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/campaigns/{campaign_id}/schedules/now [operationId: SendCampaign] */
    /**
     * Send a Campaign
     *
     * **This endpoint allows you to immediately send an existing campaign.**
     *
     * Normally a POST request would have a body, but since this endpoint is telling us to send a resource that is already created, a request body is not needed.
     */
    public static function post(int $campaign_id, ?\SendGridSDK\PostParams\V3\Campaigns\ByCampaignId\Schedules\Now $params = null): \SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Schedules\Now\Post
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Campaigns\ByCampaignId\Schedules\Now::class)->post($campaign_id, $params);
    }
}
