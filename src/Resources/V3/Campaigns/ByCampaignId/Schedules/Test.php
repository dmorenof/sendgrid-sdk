<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Campaigns\ByCampaignId\Schedules;

final class Test extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/campaigns/{campaign_id}/schedules/test',
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
            404 => '\\SendGridSDK\\DTOs\\LmcCampaignsErrorResponse',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcCampaignsErrorResponse',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcCampaignsErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Campaigns\\ByCampaignId\\Schedules\\Test\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Campaigns\\ByCampaignId\\Schedules\\Test\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Send a Test Campaign
     *
     * **This endpoint allows you to send a test campaign.**
     *
     * To send to multiple addresses, use an array for the JSON "to" value ["one&#64;address","two&#64;address"]
     */
    public function post(int $campaign_id, ?\SendGridSDK\PostParams\V3\Campaigns\ByCampaignId\Schedules\Test $params = null): \SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Schedules\Test\Post
    {
        /** @var \SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Schedules\Test\Post $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['campaign_id' => $campaign_id], parameters: $params);
        return $result;
    }
}
