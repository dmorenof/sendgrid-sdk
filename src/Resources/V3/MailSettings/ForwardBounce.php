<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\MailSettings;

final class ForwardBounce extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/mail_settings/forward_bounce',
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
        'responseType' => '\\SendGridSDK\\DTOs\\Mail\\SettingsForwardBounce',
    ];

    /**
     * Retrieve forward bounce mail settings
     *
     * **This endpoint allows you to retrieve your current bounce forwarding mail settings.**
     *
     * Enabling the Forward Bounce setting allows you to specify `email` addresses to which bounce reports will be forwarded. This endpoint returns the email address you have set to receive forwarded bounces and an `enabled` status indicating if the setting is active.
     */
    public function get(?\SendGridSDK\GetParams\V3\MailSettings\ForwardBounce $params = null): \SendGridSDK\DTOs\Mail\SettingsForwardBounce
    {
        /** @var \SendGridSDK\DTOs\Mail\SettingsForwardBounce $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/v3/mail_settings/forward_bounce',
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
        'responseType' => '\\SendGridSDK\\DTOs\\Mail\\SettingsForwardBounce',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Mail\\SettingsForwardBounce',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update forward bounce mail settings
     *
     * **This endpoint allows you to update your current bounce forwarding mail settings.**
     *
     * Enabling the Forward Bounce setting allows you to specify an `email` address to which bounce reports will be forwarded.
     *
     * You can also configure the Forward Spam mail settings in the [Mail Settings section of the Twilio SendGrid App](https://app.sendgrid.com/settings/mail_settings).
     */
    public function patch(?\SendGridSDK\PatchParams\V3\MailSettings\ForwardBounce $params = null): \SendGridSDK\DTOs\Mail\SettingsForwardBounce
    {
        /** @var \SendGridSDK\DTOs\Mail\SettingsForwardBounce $result */
        $result = $this->executeArguments(self::operation(self::PATCH), parameters: $params);
        return $result;
    }
}
