<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\TrackingSettings;

final class Open extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/tracking_settings/open',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\TrackingSettings\\Open\\Get',
    ];

    /**
     * Get Open Tracking Settings
     *
     * **This endpoint allows you to retrieve your current settings for open tracking.**
     *
     * Open Tracking adds an invisible image at the end of the email which can track email opens.
     *
     * If the email recipient has images enabled on their email client, a request to SendGrid’s server for the invisible image is executed and an open event is logged.
     *
     * These events are logged in the Statistics portal, Email Activity interface, and are reported by the Event Webhook.
     */
    public function get(?\SendGridSDK\GetParams\V3\TrackingSettings\Open $params = null): \SendGridSDK\Responses\V3\TrackingSettings\Open\Get
    {
        /** @var \SendGridSDK\Responses\V3\TrackingSettings\Open\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/v3/tracking_settings/open',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\TrackingSettings\\Open\\Patch',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\TrackingSettings\\Open\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update Open Tracking Settings
     *
     * **This endpoint allows you to update your current settings for open tracking.**
     *
     * Open Tracking adds an invisible image at the end of the email which can track email opens.
     *
     * If the email recipient has images enabled on their email client, a request to SendGrid’s server for the invisible image is executed and an open event is logged.
     *
     * These events are logged in the Statistics portal, Email Activity interface, and are reported by the Event Webhook.
     */
    public function patch(?\SendGridSDK\PatchParams\V3\TrackingSettings\Open $params = null): \SendGridSDK\Responses\V3\TrackingSettings\Open\Patch
    {
        /** @var \SendGridSDK\Responses\V3\TrackingSettings\Open\Patch $result */
        $result = $this->executeArguments(self::operation(self::PATCH), parameters: $params);
        return $result;
    }
}
