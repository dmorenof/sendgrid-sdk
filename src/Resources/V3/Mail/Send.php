<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Mail;

final class Send extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/mail/send',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            202,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
            401 => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
            403 => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
            404 => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
            405 => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
            413 => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
            500 => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
                'schemaNullable' => false,
            ],
            405 => [
                'type' => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
                'schemaNullable' => false,
            ],
            413 => [
                'type' => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Mail\\Send\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Send Email with Twilio SendGrid.
     *
     * *The Mail Send operation allows you to send email over SendGrid's v3 Web API*
     *
     * For an overview of this API, including its features and limitations, please see the [Mail Send API overview page](https://www.twilio.com/docs/sendgrid/api-reference/mail-send)
     *
     * The overview page also includes links to SendGrid's Email API quickstarts and helper libraries to get you working with this endpoint even faster.
     *
     */
    public function post(?\SendGridSDK\PostParams\V3\Mail\Send $params = null): void
    {
        $this->executeArguments(self::operation(self::POST), parameters: $params);
        return;
    }
}
