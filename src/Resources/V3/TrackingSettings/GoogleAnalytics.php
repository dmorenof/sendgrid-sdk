<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\TrackingSettings;

final class GoogleAnalytics extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/tracking_settings/google_analytics',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\GoogleAnalyticsSettings',
    ];

    /**
     * Retrieve Google Analytics Settings
     *
     * **This endpoint allows you to retrieve your current setting for Google Analytics.**
     *
     *
     * Google Analytics helps you understand how users got to your site and what they're doing there. For more information about using Google Analytics, please refer to [Google’s URL Builder](https://support.google.com/analytics/answer/1033867?hl=en) and their article on ["Best Practices for Campaign Building"](https://support.google.com/analytics/answer/1037445).
     *
     * We default the settings to Google’s recommendations. For more information, see [Google Analytics Demystified](https://sendgrid.com/docs/ui/analytics-and-reporting/google-analytics/).
     */
    public function get(?\SendGridSDK\GetParams\V3\TrackingSettings\GoogleAnalytics $params = null): \SendGridSDK\DTOs\GoogleAnalyticsSettings
    {
        /** @var \SendGridSDK\DTOs\GoogleAnalyticsSettings $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/v3/tracking_settings/google_analytics',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\GoogleAnalyticsSettings',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\GoogleAnalyticsSettings',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update Google Analytics Settings
     *
     * **This endpoint allows you to update your current setting for Google Analytics.**
     *
     * Google Analytics helps you understand how users got to your site and what they're doing there. For more information about using Google Analytics, please refer to [Google’s URL Builder](https://support.google.com/analytics/answer/1033867?hl=en) and their article on ["Best Practices for Campaign Building"](https://support.google.com/analytics/answer/1037445).
     *
     * We default the settings to Google’s recommendations. For more information, see [Google Analytics Demystified](https://sendgrid.com/docs/ui/analytics-and-reporting/google-analytics/).
     */
    public function patch(?\SendGridSDK\PatchParams\V3\TrackingSettings\GoogleAnalytics $params = null): \SendGridSDK\DTOs\GoogleAnalyticsSettings
    {
        /** @var \SendGridSDK\DTOs\GoogleAnalyticsSettings $result */
        $result = $this->executeArguments(self::operation(self::PATCH), parameters: $params);
        return $result;
    }
}
