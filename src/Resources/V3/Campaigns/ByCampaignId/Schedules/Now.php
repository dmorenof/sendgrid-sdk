<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Campaigns\ByCampaignId\Schedules;

final class Now extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/campaigns/{campaign_id}/schedules/now',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\LmcCampaignsErrorResponse',
            401 => '\\SendGridSDK\\DTOs\\LmcCampaignsErrorResponse',
            403 => '\\SendGridSDK\\DTOs\\LmcCampaignsErrorResponse',
            404 => '\\SendGridSDK\\DTOs\\LmcCampaignsErrorResponse',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcCampaignsErrorResponse',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcCampaignsErrorResponse',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcCampaignsErrorResponse',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcCampaignsErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Campaigns\\ByCampaignId\\Schedules\\Now\\Post',
    ];

    /**
     * Send a Campaign
     *
     * **This endpoint allows you to immediately send an existing campaign.**
     *
     * Normally a POST request would have a body, but since this endpoint is telling us to send a resource that is already created, a request body is not needed.
     */
    public function post(int $campaign_id, ?\SendGridSDK\PostParams\V3\Campaigns\ByCampaignId\Schedules\Now $params = null): \SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Schedules\Now\Post
    {
        /** @var \SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Schedules\Now\Post $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['campaign_id' => $campaign_id], parameters: $params);
        return $result;
    }
}
