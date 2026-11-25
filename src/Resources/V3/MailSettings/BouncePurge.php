<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\MailSettings;

final class BouncePurge extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/mail_settings/bounce_purge',
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
        'responseType' => '\\SendGridSDK\\DTOs\\Mail\\SettingsBouncePurge',
    ];

    /**
     * Retrieve Bounce Purge Mail Settings
     *
     * **This endpoint allows you to retrieve your current Bounce Purge mail settings.**
     *
     * The Bounce Purge mail setting allows you to configure the maximum age of contacts in your hard and soft bounce suppressions lists. All contacts older than their respective configured age are deleted.
     *
     * A hard bounce occurs when an email message has been returned to the sender because the recipient's address is invalid. A hard bounce might occur because the domain name doesn't exist or because the recipient is unknown.
     *
     * A soft bounce occurs when an email message reaches the recipient's mail server but is bounced back undelivered before it actually reaches the recipient. A soft bounce might occur because the recipient's inbox is full.
     *
     * You can also manage this setting in the [Mail Settings section of the Twilio SendGrid App](https://app.sendgrid.com/settings/mail_settings). You can manage your bounces manually using the [Bounces API](https://docs.sendgrid.com/api-reference/bounces-api) or the [Bounces menu in the Twilio SendGrid App](https://app.sendgrid.com/suppressions/bounces).
     */
    public function get(?\SendGridSDK\GetParams\V3\MailSettings\BouncePurge $params = null): \SendGridSDK\DTOs\Mail\SettingsBouncePurge
    {
        /** @var \SendGridSDK\DTOs\Mail\SettingsBouncePurge $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/v3/mail_settings/bounce_purge',
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
        'responseType' => '\\SendGridSDK\\DTOs\\Mail\\SettingsBouncePurge',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Mail\\SettingsBouncePurge',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update Bounce Purge Mail Settings
     *
     * **This endpoint allows you to update your current Bounce Purge mail settings.**
     *
     * The Bounce Purge mail metting allows you to configure the maximum age of contacts in your hard and soft bounce suppressions lists. All contacts older than their respective configured age are deleted.
     *
     * A hard bounce occurs when an email message has been returned to the sender because the recipient's address is invalid. A hard bounce might occur because the domain name doesn't exist or because the recipient is unknown.
     *
     * A soft bounce occurs when an email message reaches the recipient's mail server but is bounced back undelivered before it actually reaches the recipient. A soft bounce might occur because the recipient's inbox is full.
     *
     * You can also manage this setting in the [Mail Settings section of the Twilio SendGrid App](https://app.sendgrid.com/settings/mail_settings). You can manage your bounces manually using the [Bounces API](https://docs.sendgrid.com/api-reference/bounces-api) or the [Bounces menu in the Twilio SendGrid App](https://app.sendgrid.com/suppressions/bounces).
     */
    public function patch(?\SendGridSDK\PatchParams\V3\MailSettings\BouncePurge $params = null): \SendGridSDK\DTOs\Mail\SettingsBouncePurge
    {
        /** @var \SendGridSDK\DTOs\Mail\SettingsBouncePurge $result */
        $result = $this->executeArguments(self::operation(self::PATCH), parameters: $params);
        return $result;
    }
}
