<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3;

final class TrackingSettings extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/tracking_settings',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\TrackingSettings\\Get',
    ];

    /**
     * Retrieve Tracking Settings
     *
     * **This endpoint allows you to retrieve a list of all tracking settings on your account.**
     */
    public function get(?\SendGridSDK\GetParams\V3\TrackingSettings $params = null): \SendGridSDK\Responses\V3\TrackingSettings\Get
    {
        /** @var \SendGridSDK\Responses\V3\TrackingSettings\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
