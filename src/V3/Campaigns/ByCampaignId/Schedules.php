<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Campaigns\ByCampaignId;

final class Schedules extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** DELETE /v3/campaigns/{campaign_id}/schedules [operationId: UnScheduleCampaign] */
    /**
     * Unschedule a Scheduled Campaign
     *
     * **This endpoint allows you to unschedule a campaign that has already been scheduled to be sent.**
     *
     * A successful unschedule will return a 204.
     * If the specified campaign is in the process of being sent, the only option is to cancel (a different method).
     */
    public static function delete(int $campaign_id, ?\SendGridSDK\DeleteParams\V3\Campaigns\ByCampaignId\Schedules $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Campaigns\ByCampaignId\Schedules::class)->delete($campaign_id, $params);
    }

    /** GET /v3/campaigns/{campaign_id}/schedules [operationId: GetScheduledCampaign] */
    /**
     * View Scheduled Time of a Campaign
     *
     * **This endpoint allows you to retrieve the date and time that a campaign has been scheduled to be sent.**
     */
    public static function get(int $campaign_id, ?\SendGridSDK\GetParams\V3\Campaigns\ByCampaignId\Schedules $params = null): \SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Schedules\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Campaigns\ByCampaignId\Schedules::class)->get($campaign_id, $params);
    }

    /** PATCH /v3/campaigns/{campaign_id}/schedules [operationId: UpdateScheduledCampaign] */
    /**
     * Update a Scheduled Campaign
     *
     * **This endpoint allows to you change the scheduled time and date for a campaign to be sent.**
     */
    public static function patch(int $campaign_id, ?\SendGridSDK\PatchParams\V3\Campaigns\ByCampaignId\Schedules $params = null): \SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Schedules\Patch
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Campaigns\ByCampaignId\Schedules::class)->patch($campaign_id, $params);
    }

    /** POST /v3/campaigns/{campaign_id}/schedules [operationId: ScheduleCampaign] */
    /**
     * Schedule a Campaign
     *
     * **This endpoint allows you to schedule a specific date and time for your campaign to be sent.**
     *
     * If you have the flexibility, it's better to schedule mail for off-peak times. Most emails are scheduled and sent at the top of the hour or half hour. Scheduling email to avoid those times (for example, scheduling at 10:53) can result in lower deferral rates because it won't be going through our servers at the same times as everyone else's mail.
     */
    public static function post(int $campaign_id, ?\SendGridSDK\PostParams\V3\Campaigns\ByCampaignId\Schedules $params = null): \SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Schedules\Post
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Campaigns\ByCampaignId\Schedules::class)->post($campaign_id, $params);
    }
}
