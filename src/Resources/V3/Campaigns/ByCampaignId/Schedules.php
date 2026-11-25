<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Campaigns\ByCampaignId;

final class Schedules extends \SendGridSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/campaigns/{campaign_id}/schedules',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            403 => '\\SendGridSDK\\DTOs\\LmcCampaignsErrorResponse',
            404 => '\\SendGridSDK\\DTOs\\LmcCampaignsErrorResponse',
        ],
        'errorResponses' => [
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcCampaignsErrorResponse',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcCampaignsErrorResponse',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Unschedule a Scheduled Campaign
     *
     * **This endpoint allows you to unschedule a campaign that has already been scheduled to be sent.**
     *
     * A successful unschedule will return a 204.
     * If the specified campaign is in the process of being sent, the only option is to cancel (a different method).
     */
    public function delete(int $campaign_id, ?\SendGridSDK\DeleteParams\V3\Campaigns\ByCampaignId\Schedules $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE), path: ['campaign_id' => $campaign_id], parameters: $params);
        return;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/campaigns/{campaign_id}/schedules',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            404 => '\\SendGridSDK\\DTOs\\LmcCampaignsErrorResponse',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcCampaignsErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Campaigns\\ByCampaignId\\Schedules\\Get',
    ];

    /**
     * View Scheduled Time of a Campaign
     *
     * **This endpoint allows you to retrieve the date and time that a campaign has been scheduled to be sent.**
     */
    public function get(int $campaign_id, ?\SendGridSDK\GetParams\V3\Campaigns\ByCampaignId\Schedules $params = null): \SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Schedules\Get
    {
        /** @var \SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Schedules\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['campaign_id' => $campaign_id], parameters: $params);
        return $result;
    }

    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/v3/campaigns/{campaign_id}/schedules',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\LmcCampaignsErrorResponse',
            403 => '\\SendGridSDK\\DTOs\\LmcCampaignsErrorResponse',
            404 => '\\SendGridSDK\\DTOs\\LmcCampaignsErrorResponse',
        ],
        'errorResponses' => [
            400 => [
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
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Campaigns\\ByCampaignId\\Schedules\\Patch',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Campaigns\\ByCampaignId\\Schedules\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update a Scheduled Campaign
     *
     * **This endpoint allows to you change the scheduled time and date for a campaign to be sent.**
     */
    public function patch(int $campaign_id, ?\SendGridSDK\PatchParams\V3\Campaigns\ByCampaignId\Schedules $params = null): \SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Schedules\Patch
    {
        /** @var \SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Schedules\Patch $result */
        $result = $this->executeArguments(self::operation(self::PATCH), path: ['campaign_id' => $campaign_id], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/campaigns/{campaign_id}/schedules',
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
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Campaigns\\ByCampaignId\\Schedules\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Campaigns\\ByCampaignId\\Schedules\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Schedule a Campaign
     *
     * **This endpoint allows you to schedule a specific date and time for your campaign to be sent.**
     *
     * If you have the flexibility, it's better to schedule mail for off-peak times. Most emails are scheduled and sent at the top of the hour or half hour. Scheduling email to avoid those times (for example, scheduling at 10:53) can result in lower deferral rates because it won't be going through our servers at the same times as everyone else's mail.
     */
    public function post(int $campaign_id, ?\SendGridSDK\PostParams\V3\Campaigns\ByCampaignId\Schedules $params = null): \SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Schedules\Post
    {
        /** @var \SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Schedules\Post $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['campaign_id' => $campaign_id], parameters: $params);
        return $result;
    }
}
