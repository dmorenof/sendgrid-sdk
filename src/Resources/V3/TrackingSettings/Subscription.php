<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\TrackingSettings;

final class Subscription extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/tracking_settings/subscription',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\SubscriptionTrackingSettings',
    ];

    /**
     * Retrieve Subscription Tracking Settings
     *
     * **This endpoint allows you to retrieve your current settings for subscription tracking.**
     *
     * Subscription tracking adds links to the bottom of your emails that allows your recipients to subscribe to, or unsubscribe from, your emails.
     */
    public function get(?\SendGridSDK\GetParams\V3\TrackingSettings\Subscription $params = null): \SendGridSDK\DTOs\SubscriptionTrackingSettings
    {
        /** @var \SendGridSDK\DTOs\SubscriptionTrackingSettings $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/v3/tracking_settings/subscription',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\SubscriptionTrackingSettings',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\SubscriptionTrackingSettings',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update Subscription Tracking Settings
     *
     * **This endpoint allows you to update your current settings for subscription tracking.**
     *
     * Subscription tracking adds links to the bottom of your emails that allows your recipients to subscribe to, or unsubscribe from, your emails.
     */
    public function patch(?\SendGridSDK\PatchParams\V3\TrackingSettings\Subscription $params = null): \SendGridSDK\DTOs\SubscriptionTrackingSettings
    {
        /** @var \SendGridSDK\DTOs\SubscriptionTrackingSettings $result */
        $result = $this->executeArguments(self::operation(self::PATCH), parameters: $params);
        return $result;
    }
}
