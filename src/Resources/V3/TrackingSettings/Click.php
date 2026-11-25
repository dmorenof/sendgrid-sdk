<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\TrackingSettings;

final class Click extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/tracking_settings/click',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\ClickTracking',
    ];

    /**
     * Retrieve Click Track Settings
     *
     * **This endpoint allows you to retrieve your current click tracking setting.**
     *
     * Click Tracking overrides all the links and URLs in your emails and points them to either SendGrid’s servers or the domain with which you branded your link. When a customer clicks a link, SendGrid tracks those [clicks](https://sendgrid.com/docs/glossary/clicks/).
     *
     * Click tracking helps you understand how users are engaging with your communications. SendGrid can track up to 1000 links per email
     */
    public function get(?\SendGridSDK\GetParams\V3\TrackingSettings\Click $params = null): \SendGridSDK\DTOs\ClickTracking
    {
        /** @var \SendGridSDK\DTOs\ClickTracking $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/v3/tracking_settings/click',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\ClickTracking',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\TrackingSettings\\Click\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update Click Tracking Settings
     *
     * **This endpoint allows you to enable or disable your current click tracking setting.**
     *
     * Click Tracking overrides all the links and URLs in your emails and points them to either SendGrid’s servers or the domain with which you branded your link. When a customer clicks a link, SendGrid tracks those [clicks](https://sendgrid.com/docs/glossary/clicks/).
     *
     * Click tracking helps you understand how users are engaging with your communications. SendGrid can track up to 1000 links per email
     */
    public function patch(?\SendGridSDK\PatchParams\V3\TrackingSettings\Click $params = null): \SendGridSDK\DTOs\ClickTracking
    {
        /** @var \SendGridSDK\DTOs\ClickTracking $result */
        $result = $this->executeArguments(self::operation(self::PATCH), parameters: $params);
        return $result;
    }
}
