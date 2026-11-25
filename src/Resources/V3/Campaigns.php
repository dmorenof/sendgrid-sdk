<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3;

final class Campaigns extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/campaigns',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Campaigns\\Get',
    ];

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
    public function get(?\SendGridSDK\GetParams\V3\Campaigns $params = null): \SendGridSDK\Responses\V3\Campaigns\Get
    {
        /** @var \SendGridSDK\Responses\V3\Campaigns\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/campaigns',
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
            401 => '\\SendGridSDK\\Responses\\Errors\\Status401Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcCampaignsErrorResponse',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Campaigns2xx',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Post\\Campaigns\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a Campaign
     *
     * **This endpoint allows you to create a campaign.**
     *
     * In order to send or schedule the campaign, you will be required to provide a subject, sender ID, content (we suggest both html and plain text), and at least one list or segment ID. This information is not required when you create a campaign.
     */
    public function post(?\SendGridSDK\PostParams\V3\Campaigns $params = null): \SendGridSDK\DTOs\Campaigns2xx
    {
        /** @var \SendGridSDK\DTOs\Campaigns2xx $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_CAMPAIGN_ID = [
        'method' => 'DELETE',
        'path' => '/v3/campaigns/{campaign_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            401 => '\\SendGridSDK\\Responses\\Errors\\Status401Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete a Campaign
     *
     * **This endpoint allows you to delete a specific campaign.**
     */
    public function deleteByCampaignId(int $campaign_id, ?\SendGridSDK\DeleteParams\V3\Campaigns\ByCampaignId $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_CAMPAIGN_ID), path: ['campaign_id' => $campaign_id], parameters: $params);
        return;
    }

    private const array GET_BY_CAMPAIGN_ID = [
        'method' => 'GET',
        'path' => '/v3/campaigns/{campaign_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\Responses\\Errors\\Status401Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Campaigns\\ByCampaignId\\Get',
    ];

    /**
     * Retrieve a single campaign
     *
     * **This endpoint allows you to retrieve a specific campaign.**
     */
    public function getByCampaignId(int $campaign_id, ?\SendGridSDK\GetParams\V3\Campaigns\ByCampaignId $params = null): \SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Get
    {
        /** @var \SendGridSDK\Responses\V3\Campaigns\ByCampaignId\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CAMPAIGN_ID), path: ['campaign_id' => $campaign_id], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_CAMPAIGN_ID = [
        'method' => 'PATCH',
        'path' => '/v3/campaigns/{campaign_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
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
        'responseType' => '\\SendGridSDK\\DTOs\\Campaigns2xx',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Campaigns\\ByCampaignId\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update a Campaign
     *
     * **This endpoint allows you to update a specific campaign.**
     *
     * This is especially useful if you only set up the campaign using POST /campaigns, but didn't set many of the parameters.
     */
    public function patchByCampaignId(int $campaign_id, ?\SendGridSDK\PatchParams\V3\Campaigns\ByCampaignId $params = null): \SendGridSDK\DTOs\Campaigns2xx
    {
        /** @var \SendGridSDK\DTOs\Campaigns2xx $result */
        $result = $this->executeArguments(self::operation(self::PATCH_BY_CAMPAIGN_ID), path: ['campaign_id' => $campaign_id], parameters: $params);
        return $result;
    }
}
