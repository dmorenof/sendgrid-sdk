<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3;

final class MailSettings extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/mail_settings',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant5Response',
            401 => '\\SendGridSDK\\Responses\\Errors\\Status401Variant2Response',
            403 => '\\SendGridSDK\\Responses\\Errors\\Status403Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant2Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant3Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant5Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status401Variant2Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status403Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant2Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant3Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\MailSettings\\Get',
    ];

    /**
     * Retrieve all mail settings
     *
     * **This endpoint allows you to retrieve a paginated list of all mail settings.**
     *
     * Each setting will be returned with an `enabled` status set to `true` or `false` and a short description that explains what the setting does.
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public function get(?\SendGridSDK\GetParams\V3\MailSettings $params = null): \SendGridSDK\Responses\V3\MailSettings\Get
    {
        /** @var \SendGridSDK\Responses\V3\MailSettings\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
