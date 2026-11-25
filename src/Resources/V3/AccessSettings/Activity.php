<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\AccessSettings;

final class Activity extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/access_settings/activity',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Ip\\AccessManagementError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\AccessSettings\\Activity\\Get',
    ];

    /**
     * Retrieve all recent access attempts
     *
     * **This endpoint allows you to retrieve a list of all of the IP addresses that recently attempted to access your account either through the User Interface or the API.**
     */
    public function get(?\SendGridSDK\GetParams\V3\AccessSettings\Activity $params = null): \SendGridSDK\Responses\V3\AccessSettings\Activity\Get
    {
        /** @var \SendGridSDK\Responses\V3\AccessSettings\Activity\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
