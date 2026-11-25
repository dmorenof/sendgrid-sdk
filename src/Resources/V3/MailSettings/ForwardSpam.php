<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\MailSettings;

final class ForwardSpam extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/mail_settings/forward_spam',
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
        'responseType' => '\\SendGridSDK\\DTOs\\Mail\\SettingsForwardSpam',
    ];

    /**
     * Retrieve forward spam mail settings
     *
     * **This endpoint allows you to retrieve your current Forward Spam mail settings.**
     *
     * Enabling the Forward Spam setting allows you to specify `email` addresses to which spam reports will be forwarded. This endpoint returns any email address(es) you have set to receive forwarded spam and an `enabled` status indicating if the setting is active.
     */
    public function get(?\SendGridSDK\GetParams\V3\MailSettings\ForwardSpam $params = null): \SendGridSDK\DTOs\Mail\SettingsForwardSpam
    {
        /** @var \SendGridSDK\DTOs\Mail\SettingsForwardSpam $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/v3/mail_settings/forward_spam',
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
        'responseType' => '\\SendGridSDK\\DTOs\\Mail\\SettingsForwardSpam',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Mail\\SettingsForwardSpam',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update forward spam mail settings
     *
     * **This endpoint allows you to update your current Forward Spam mail settings.**
     *
     * Enabling the Forward Spam setting allows you to specify `email` addresses to which spam reports will be forwarded. You can set multiple addresses by passing this endpoint a comma separated list of emails in a single string.
     *
     * ```
     * {
     *   "email": "address1&#64;example.com, address2&#64;exapmle.com",
     *   "enabled": true
     * }
     * ```
     *
     * The Forward Spam setting may also be used to receive emails sent to `abuse&#64;` and `postmaster&#64;` role addresses if you have authenticated your domain.
     *
     * For example, if you authenticated `example.com` as your root domain and set a custom return path of `sub` for that domain, you could turn on Forward Spam, and any emails sent to `abuse&#64;sub.example.com` or `postmaster&#64;sub.example.com` would be forwarded to the email address you entered in the `email` field.
     *
     * You can authenticate your domain using the "Authenticate a domain" endpoint or in the [Sender Authentication section of the Twilio SendGrid App](https://app.sendgrid.com/settings/sender_auth). You can also configure the Forward Spam mail settings in the [Mail Settings section of the Twilio SendGrid App](https://app.sendgrid.com/settings/mail_settings).
     */
    public function patch(?\SendGridSDK\PatchParams\V3\MailSettings\ForwardSpam $params = null): \SendGridSDK\DTOs\Mail\SettingsForwardSpam
    {
        /** @var \SendGridSDK\DTOs\Mail\SettingsForwardSpam $result */
        $result = $this->executeArguments(self::operation(self::PATCH), parameters: $params);
        return $result;
    }
}
