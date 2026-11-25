<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\MailSettings;

final class Template extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/mail_settings/template',
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
        'responseType' => '\\SendGridSDK\\DTOs\\Mail\\SettingsTemplate200',
    ];

    /**
     * Retrieve legacy template mail settings
     *
     * **This endpoint allows you to retrieve your current legacy email template settings.**
     *
     * This setting refers to our original email templates. We currently support more fully featured [Dynamic Transactional Templates](https://sendgrid.com/docs/ui/sending-email/how-to-send-an-email-with-dynamic-transactional-templates/).
     *
     * The legacy email template setting wraps an HTML template around your email content. This can be useful for sending out marketing email and/or other HTML formatted messages. For instructions on using legacy templates, see how to ["Create and Edit Legacy Transactional Templates](https://sendgrid.com/docs/ui/sending-email/create-and-edit-legacy-transactional-templates/). For help migrating to our current template system, see ["Migrating from Legacy Templates"](https://sendgrid.com/docs/ui/sending-email/migrating-from-legacy-templates/).
     */
    public function get(?\SendGridSDK\GetParams\V3\MailSettings\Template $params = null): \SendGridSDK\DTOs\Mail\SettingsTemplate200
    {
        /** @var \SendGridSDK\DTOs\Mail\SettingsTemplate200 $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/v3/mail_settings/template',
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
        'responseType' => '\\SendGridSDK\\Responses\\V3\\MailSettings\\Template\\Patch',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\MailSettings\\Template\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update template mail settings
     *
     * **This endpoint allows you to update your current legacy email template settings.**
     *
     * This setting refers to our original email templates. We currently support more fully featured [Dynamic Transactional Templates](https://sendgrid.com/docs/ui/sending-email/how-to-send-an-email-with-dynamic-transactional-templates/).
     *
     * The legacy email template setting wraps an HTML template around your email content. This can be useful for sending out marketing email and/or other HTML formatted messages. For instructions on using legacy templates, see how to ["Create and Edit Legacy Transactional Templates](https://sendgrid.com/docs/ui/sending-email/create-and-edit-legacy-transactional-templates/). For help migrating to our current template system, see ["Migrating from Legacy Templates"](https://sendgrid.com/docs/ui/sending-email/migrating-from-legacy-templates/).
     */
    public function patch(?\SendGridSDK\PatchParams\V3\MailSettings\Template $params = null): \SendGridSDK\Responses\V3\MailSettings\Template\Patch
    {
        /** @var \SendGridSDK\Responses\V3\MailSettings\Template\Patch $result */
        $result = $this->executeArguments(self::operation(self::PATCH), parameters: $params);
        return $result;
    }
}
