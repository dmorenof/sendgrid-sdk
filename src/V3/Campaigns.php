<?php

declare(strict_types=1);

namespace SendGridSDK\V3;

final class Campaigns extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/campaigns [operationId: ListCampaign] */
    /**
     * Retrieve all Campaigns
     *
     * **This endpoint allows you to retrieve a paginated list of all of your campaigns.**
     *
     * Returns campaigns in reverse order they were created (newest first).
     *
     * Returns an empty array if no campaigns exist.
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Campaigns $params = null): \SendGridSDK\Responses\V3\Campaigns\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Campaigns::class)->get($params);
    }

    /** POST /v3/campaigns [operationId: CreateCampaign] */
    /**
     * Create a Campaign
     *
     * **This endpoint allows you to create a campaign.**
     *
     * In order to send or schedule the campaign, you will be required to provide a subject, sender ID, content (we suggest both html and plain text), and at least one list or segment ID. This information is not required when you create a campaign.
     */
    public static function post(?\SendGridSDK\PostParams\V3\Campaigns $params = null): \SendGridSDK\DTOs\Campaigns2xx
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Campaigns::class)->post($params);
    }

    /** DELETE /v3/campaigns/{campaign_id} [operationId: DeleteCampaign] */
    /**
     * Delete a Campaign
     *
     * **This endpoint allows you to delete a specific campaign.**
     */
    public static function deleteByCampaignId(int $campaign_id, ?\SendGridSDK\DeleteParams\V3\Campaigns\ByCampaignId $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Campaigns::class)->deleteByCampaignId($campaign_id, $params);
    }

    /** GET /v3/campaigns/{campaign_id} [operationId: GetCampaign] */
    /**
     * Retrieve a single campaign
     *
     * **This endpoint allows you to retrieve a specific campaign.**
     */
    public static function getByCampaignId(int $campaign_id, ?\SendGridSDK\GetParams\V3\Campaigns\ByCampaignId $params = null): \SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Campaigns::class)->getByCampaignId($campaign_id, $params);
    }

    /** PATCH /v3/campaigns/{campaign_id} [operationId: UpdateCampaign] */
    /**
     * Update a Campaign
     *
     * **This endpoint allows you to update a specific campaign.**
     *
     * This is especially useful if you only set up the campaign using POST /campaigns, but didn't set many of the parameters.
     */
    public static function patchByCampaignId(int $campaign_id, ?\SendGridSDK\PatchParams\V3\Campaigns\ByCampaignId $params = null): \SendGridSDK\DTOs\Campaigns2xx
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Campaigns::class)->patchByCampaignId($campaign_id, $params);
    }
}
