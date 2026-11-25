<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\MailSettings;

final class Footer extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/mail_settings/footer',
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
        'responseType' => '\\SendGridSDK\\DTOs\\Mail\\SettingsFooter',
    ];

    /**
     * Retrieve footer mail settings
     *
     * **This endpoint allows you to retrieve your current Footer mail settings.**
     *
     * The Footer setting will insert a custom footer at the bottom of your text and HTML email message bodies.
     *
     * You can insert your HTML or plain text directly using the "Update footer mail settings" endpoint, or you can create the footer using the [Mail Settings menu in the Twilio SendGrid App](https://app.sendgrid.com/settings/mail_settings).
     */
    public function get(?\SendGridSDK\GetParams\V3\MailSettings\Footer $params = null): \SendGridSDK\DTOs\Mail\SettingsFooter
    {
        /** @var \SendGridSDK\DTOs\Mail\SettingsFooter $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/v3/mail_settings/footer',
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
        'responseType' => '\\SendGridSDK\\DTOs\\Mail\\SettingsFooter',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Mail\\SettingsFooter',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update footer mail settings
     *
     * **This endpoint allows you to update your current Footer mail settings.**
     *
     * The Footer setting will insert a custom footer at the bottom of your text and HTML email message bodies.
     *
     * You can insert your HTML or plain text directly using this endpoint, or you can create the footer using the [Mail Settings menu in the Twilio SendGrid App](https://app.sendgrid.com/settings/mail_settings).
     */
    public function patch(?\SendGridSDK\PatchParams\V3\MailSettings\Footer $params = null): \SendGridSDK\DTOs\Mail\SettingsFooter
    {
        /** @var \SendGridSDK\DTOs\Mail\SettingsFooter $result */
        $result = $this->executeArguments(self::operation(self::PATCH), parameters: $params);
        return $result;
    }
}
